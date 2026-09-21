<?php
/**
 * Link tables for section pages (Links, Spectrometer, Analysis, …).
 *
 * Loaded via _includes/bootstrap.php. Edit this file to change how tables
 * render — not bootstrap.php.
 *
 * Use keys. Optional fields can be omitted; positional [text, url, desc]
 * still works for a simple one-link row.
 *
 *   ['text' => 'ELOG', 'url' => 'https://…', 'desc' => 'Moller Polarimetry ELOG']
 *
 *   ['type' => 'PDF', 'url' => 'magnets/docs/foo.pdf',
 *    'desc' => 'Quad tests', 'date' => '2000']
 *
 * Several links, one description (each link on its own line):
 *
 *   [
 *       'links' => [
 *           ['type' => 'PDF',  'url' => 'magnets/docs/QM1H02.pdf'],
 *           ['type' => 'XLSX', 'url' => 'magnets/docs/QM1H02.xlsx'],
 *       ],
 *       'desc' => 'QM1H02 Field Mapping Results',
 *       'date' => '2012',
 *   ]
 *
 * Keys: text, url, desc, type, date, links.
 * Aliases: linkText, linkURL, linkDesc, linkType, linkDate.
 *
 * type  — clickable label when text is omitted; if both are set, type is a
 *         small tag after the link. PDF/spreadsheet types open in a new tab.
 * date  — own column. Empty / omitted dates render as --.
 *
 * Optional 3rd argument — rename headers, and/or column order:
 *
 *   link_table('Recent results', $rows, [
 *       'text' => 'Data Set',
 *       'date' => 'Year',
 *       'columns' => ['text', 'date', 'desc'],
 *   ]);
 *
 * Default headers: Date, Link, Description.
 * Default order: date, text, desc. Missing dates render as --.
 *
 * http(s) URLs open in a new tab. Other site paths use site_url() and stay here
 * unless type/url looks like a downloadable file.
 * Empty heading → no <h2>.
 */

if (defined('MOLLER_TABLE_HELPERS')) {
    return;
}
define('MOLLER_TABLE_HELPERS', true);

function _link_is_list(array $a) {
    if (function_exists('array_is_list')) {
        return array_is_list($a);
    }
    return $a === [] || array_keys($a) === range(0, count($a) - 1);
}

function _link_is_external($url) {
    return (bool) preg_match('#^(https?:)?//#i', $url);
}

function _link_is_placeholder($s) {
    $s = trim((string) $s);
    return $s === '' || (bool) preg_match('/xxxx/i', $s);
}

function _th($label, $icon = '', $class = '') {
    $cls = $class !== '' ? ' class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '"' : '';
    $iconHtml = $icon !== ''
        ? '<i class="' . htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') . '" aria-hidden="true"></i> '
        : '';
    echo '      <th' . $cls . '>' . $iconHtml . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</th>' . "\n";
}

function _td($html) {
    echo '        <td>' . $html . '</td>' . "\n";
}

function _td_text($text) {
    _td(htmlspecialchars((string) $text, ENT_QUOTES, 'UTF-8'));
}

function _table_open($heading, callable $writeHeaders) {
    $heading = trim((string) $heading);
    if ($heading !== '') {
        echo '<h2>' . htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') . '</h2>' . "\n";
    }
    echo '<div class="list-table-wrap">' . "\n";
    echo '  <table class="list-table">' . "\n";
    echo '    <thead><tr>' . "\n";
    $writeHeaders();
    echo '    </tr></thead>' . "\n";
    echo '    <tbody>' . "\n";
}

function _table_close() {
    echo '    </tbody>' . "\n";
    echo '  </table>' . "\n";
    echo '</div>' . "\n";
}

function _cell_link($text, $url) {
    $text = trim((string) $text);
    $url = trim((string) $url);
    if (_link_is_placeholder($url)) {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
    $label = $text !== '' ? $text : $url;
    return _link_anchor(['text' => $label, 'url' => $url, 'type' => '']);
}

function _link_pick(array $item, array $names, $default = '') {
    foreach ($names as $name) {
        if (array_key_exists($name, $item) && $item[$name] !== null && $item[$name] !== '') {
            return trim((string) $item[$name]);
        }
    }
    return $default;
}

function _link_is_file($url, $type) {
    $type = strtolower(trim((string) $type));
    $files = ['pdf', 'xlsx', 'xls', 'ods', 'doc', 'docx', 'ppt', 'pptx', 'key', 'ps', 'eps', 'zip'];
    if (in_array($type, $files, true)) {
        return true;
    }
    return (bool) preg_match('/\.(pdf|xlsx?|ods|docx?|pptx?|key|e?ps|zip)$/i', (string) $url);
}

/**
 * @return array{text:string,url:string,type:string}
 */
function _link_item($item) {
    if (!is_array($item)) {
        return ['text' => '', 'url' => '', 'type' => ''];
    }
    if (_link_is_list($item) && isset($item[0], $item[1]) && !array_key_exists('url', $item) && !array_key_exists('text', $item)) {
        $type = isset($item[2]) ? trim((string) $item[2]) : '';
        $text = trim((string) $item[0]);
        return [
            'text' => $text !== '' ? $text : $type,
            'url' => trim((string) $item[1]),
            'type' => $type,
        ];
    }
    $type = _link_pick($item, ['type', 'linkType']);
    $text = _link_pick($item, ['text', 'linkText']);
    $url = _link_pick($item, ['url', 'linkURL']);
    if ($text === '') {
        $text = $type;
    }
    return ['text' => $text, 'url' => $url, 'type' => $type];
}

/**
 * @return array{links: list<array{text:string,url:string,type:string}>, desc: string, date: string}
 */
function _link_row_parse($row) {
    $empty = ['links' => [], 'desc' => '', 'date' => ''];
    if (!is_array($row)) {
        return $empty;
    }

    if (_link_is_list($row) && count($row) === 3 && is_string($row[0]) && is_string($row[1]) && is_string($row[2])) {
        return [
            'links' => [_link_item([$row[0], $row[1]])],
            'desc' => $row[2],
            'date' => '',
        ];
    }

    $keyed = array_key_exists('links', $row)
        || array_key_exists('desc', $row) || array_key_exists('linkDesc', $row)
        || array_key_exists('text', $row) || array_key_exists('linkText', $row)
        || array_key_exists('url', $row) || array_key_exists('linkURL', $row)
        || array_key_exists('date', $row) || array_key_exists('linkDate', $row)
        || array_key_exists('type', $row) || array_key_exists('linkType', $row);

    if ($keyed) {
        $desc = _link_pick($row, ['desc', 'linkDesc']);
        $date = _link_pick($row, ['date', 'linkDate']);
        $links = [];
        if (!empty($row['links']) && is_array($row['links'])) {
            foreach ($row['links'] as $item) {
                if (is_array($item)) {
                    $links[] = _link_item($item);
                }
            }
        } else {
            $links[] = _link_item($row);
        }
        return ['links' => $links, 'desc' => $desc, 'date' => $date];
    }

    $items = array_values($row);
    $desc = '';
    if ($items !== [] && is_string($items[array_key_last($items)])) {
        $desc = (string) array_pop($items);
    }
    $links = [];
    foreach ($items as $item) {
        if (is_array($item)) {
            $links[] = _link_item($item);
        }
    }
    return ['links' => $links, 'desc' => $desc, 'date' => ''];
}

function _link_anchor(array $link) {
    $url = $link['url'];
    $type = $link['type'];
    $text = $link['text'];
    if ($text === '' || ($type !== '' && strcasecmp($text, $type) === 0)) {
        $path = $url;
        if ($url !== '' && preg_match('#^https?://#i', $url)) {
            $path = parse_url($url, PHP_URL_PATH) ?: $url;
        }
        $base = basename(str_replace('\\', '/', (string) $path));
        if ($base !== '' && $base !== '/' && $base !== '.') {
            $text = $base;
        } elseif ($type !== '') {
            $text = $type;
        }
    }
    $label = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $tag = '';
    if ($type !== '') {
        $tag = '<span class="link-type">[' . htmlspecialchars($type, ENT_QUOTES, 'UTF-8') . ']</span> ';
    }
    if ($url === '') {
        return $tag . $label;
    }
    $href = _link_is_external($url) ? $url : site_url($url);
    $newTab = _link_is_external($url) || _link_is_file($url, $type);
    $extra = $newTab ? ' target="_blank" rel="noopener noreferrer"' : '';
    return $tag . '<a href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '"' . $extra . '>' . $label . '</a>';
}

function _link_table_options(array $opts) {
    $labels = [
        'date' => 'Date',
        'text' => 'Link',
        'desc' => 'Description',
    ];
    $columns = null;
    $sort = 'date-desc';
    if (array_key_exists('sort', $opts)) {
        $sort = $opts['sort'];
        unset($opts['sort']);
    }
    if ($sort === true || $sort === 'date') {
        $sort = 'date-desc';
    }
    if ($sort === false || $sort === null || $sort === '' || $sort === 'none') {
        $sort = false;
    }
    if (isset($opts['columns']) && is_array($opts['columns'])) {
        $columns = $opts['columns'];
        unset($opts['columns']);
    }
    if (isset($opts['headers']) && is_array($opts['headers'])) {
        $opts = $opts['headers'] + $opts;
        unset($opts['headers']);
    }
    if (isset($opts['link']) && is_string($opts['link'])) {
        $opts['text'] = $opts['link'];
    }
    if (isset($opts['description']) && is_string($opts['description'])) {
        $opts['desc'] = $opts['description'];
    }
    foreach ($labels as $key => $default) {
        if (isset($opts[$key]) && is_string($opts[$key]) && $opts[$key] !== '') {
            $labels[$key] = $opts[$key];
        }
    }
    return [$labels, $columns, $sort];
}

/**
 * Turn a free-form date string into an integer YYYYMMDD for sorting.
 * MM-YYYY / Month YYYY use mid-month. Year-only uses month 0 so it sorts
 * after dated months in that year when newest-first.
 * Undated / unparsable → null.
 */
function _link_date_sort_key($date) {
    $date = trim((string) $date);
    if ($date === '' || $date === '--') {
        return null;
    }
    // Year only → month 0 (end of year when sorting newest-first)
    if (preg_match('/^\d{4}$/', $date)) {
        return ((int) $date) * 10000;
    }
    // Talks / publications / literature style: 03-2023
    if (preg_match('/^(\d{1,2})-(\d{4})$/', $date, $m)) {
        $month = max(0, min(12, (int) $m[1]));
        return ((int) $m[2]) * 10000 + $month * 100 + ($month > 0 ? 15 : 0);
    }
    $ts = strtotime($date);
    if ($ts !== false) {
        return (int) date('Ymd', $ts);
    }
    // Bare year buried in junk → treat as year-only (month 0)
    if (preg_match('/(\d{4})/', $date, $m)) {
        return ((int) $m[1]) * 10000;
    }
    return null;
}

/**
 * Sort a list of row arrays by their date field (newest first by default).
 *
 * @param list<array> $rows
 * @param 'date-desc'|'date-asc'|false $sort
 * @return list<array>
 */
function _rows_sort_by_date(array $rows, $sort = 'date-desc') {
    if ($sort !== 'date-desc' && $sort !== 'date-asc') {
        return $rows;
    }
    $desc = ($sort === 'date-desc');
    usort($rows, static function ($a, $b) use ($desc) {
        $ka = _link_date_sort_key(is_array($a) ? _link_pick($a, ['date', 'linkDate']) : '');
        $kb = _link_date_sort_key(is_array($b) ? _link_pick($b, ['date', 'linkDate']) : '');
        if ($ka === null && $kb === null) {
            return 0;
        }
        if ($ka === null) {
            return 1;
        }
        if ($kb === null) {
            return -1;
        }
        if ($ka === $kb) {
            return 0;
        }
        if ($desc) {
            return ($ka < $kb) ? 1 : -1;
        }
        return ($ka < $kb) ? -1 : 1;
    });
    return $rows;
}

function _link_table_sort_rows(array $parsedRows, $sort) {
    return _rows_sort_by_date($parsedRows, $sort);
}

function link_table($heading, array $rows, array $headers = []) {
    $heading = trim((string) $heading);
    if ($heading !== '') {
        echo '<h2>' . htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') . '</h2>' . "\n";
    }
    if (!$rows) {
        return;
    }

    list($labels, $columnOrder, $sort) = _link_table_options($headers);

    $parsedRows = [];
    foreach ($rows as $row) {
        $parsedRows[] = _link_row_parse($row);
    }
    $parsedRows = _link_table_sort_rows($parsedRows, $sort);

    if (is_array($columnOrder) && $columnOrder) {
        $columns = [];
        foreach ($columnOrder as $col) {
            $col = $col === 'link' ? 'text' : ($col === 'description' ? 'desc' : $col);
            if (in_array($col, ['date', 'text', 'desc'], true)) {
                $columns[] = $col;
            }
        }
    } else {
        $columns = ['date', 'text', 'desc'];
    }
    if (!$columns) {
        $columns = ['date', 'text', 'desc'];
    }

    $th = [
        'date' => ['icon' => 'fa fa-regular fa-calendar', 'class' => 'col-date'],
        'text' => ['icon' => 'fa fa-solid fa-link', 'class' => 'col-link'],
        'desc' => ['icon' => 'fa fa-solid fa-pencil', 'class' => 'col-desc'],
    ];

    _table_open('', function () use ($columns, $labels, $th) {
        foreach ($columns as $col) {
            _th($labels[$col], $th[$col]['icon'], $th[$col]['class']);
        }
    });

    foreach ($parsedRows as $parsed) {
        echo '      <tr>' . "\n";
        foreach ($columns as $col) {
            if ($col === 'date') {
                $date = $parsed['date'] !== '' ? $parsed['date'] : '--';
                _td_text($date);
            } elseif ($col === 'text') {
                $html = '';
                foreach ($parsed['links'] as $link) {
                    $html .= '<span class="link-item">' . _link_anchor($link) . '</span>';
                }
                echo '        <td><div class="link-cell">' . $html . '</div></td>' . "\n";
            } else {
                _td_text($parsed['desc']);
            }
        }
        echo '      </tr>' . "\n";
    }

    _table_close();
}
