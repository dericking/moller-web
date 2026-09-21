<?php
/**
 * Publication tables (papers, theses, literature).
 *
 * Loaded via _includes/bootstrap.php. Separate from link_table() / talks_table().
 *
 *   publication_table('Published Papers and Theses', [
 *       [
 *           'date'    => '01-2023',
 *           'journal' => 'NIM-A',
 *           'authors' => 'D.E. King, D.C. Jones, et al.',
 *           'title'   => 'Precision Møller polarimetry for PREX-2 and CREX',
 *           'url'     => 'https://doi.org/10.1016/j.nima.2022.167506',
 *           'arxiv'   => '2207.02150',
 *       ],
 *   ]);
 *
 * Columns: Date | Topic(s)? | Authors | Title | Journal | ArXiv
 * Optional: topic (adds Topic(s) when any row has one — literature),
 *           arxiv_url (if the arXiv link is not https://arxiv.org/abs/{id}),
 *           more (extra title-cell links, same shape as talks_table).
 * Missing arXiv / journal renders as an en dash.
 *
 * Usable on any page after bootstrap.php.
 */

function _arxiv_cell(array $row) {
    $label = _link_pick($row, ['arxiv']);
    $url = _link_pick($row, ['arxiv_url', 'arxivUrl']);
    if ($url === '' && $label !== '' && !_link_is_placeholder($label)) {
        if (_link_is_external($label)) {
            $url = $label;
        } else {
            $id = preg_replace('#^arXiv:#i', '', $label);
            $url = 'https://arxiv.org/abs/' . $id;
        }
    }
    if ($label === '' && $url !== '') {
        $label = 'arXiv';
    }
    if ($label !== '' && !_link_is_external($label) && stripos($label, 'arxiv') === false && !_link_is_placeholder($label)) {
        $label = 'arXiv:' . $label;
    }
    if (_link_is_placeholder($url) && _link_is_placeholder($label)) {
        return '–';
    }
    return _cell_link($label, $url);
}

function publication_table($heading, array $rows) {
    if (!$rows) {
        $heading = trim((string) $heading);
        if ($heading !== '') {
            echo '<h2>' . htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') . '</h2>' . "\n";
        }
        return;
    }

    $rows = _rows_sort_by_date($rows, 'date-desc');

    $hasTopic = false;
    foreach ($rows as $row) {
        if (is_array($row) && _link_pick($row, ['topic', 'topics']) !== '') {
            $hasTopic = true;
            break;
        }
    }

    _table_open($heading, function () use ($hasTopic) {
        _th('Date', 'fa fa-regular fa-calendar', 'col-date');
        if ($hasTopic) {
            _th('Topic(s)', 'fa-solid fa-tags');
        }
        _th('Authors', 'fa fa-solid fa-users');
        _th('Title', 'fa fa-solid fa-link');
        _th('Journal', 'fa fa-solid fa-book');
        _th('ArXiv', 'fa fa-solid fa-globe');
    });

    foreach ($rows as $row) {
        if (!is_array($row)) {
            continue;
        }
        $date = _link_pick($row, ['date']);
        $journal = _link_pick($row, ['journal']);
        if ($journal === '') {
            $journal = '–';
        }
        $authors = _link_pick($row, ['authors', 'author']);
        $title = _link_pick($row, ['title']);
        $url = _link_pick($row, ['url', 'doi']);
        $topic = _link_pick($row, ['topic', 'topics']);
        $titleHtml = _cell_link($title, $url);
        if (!empty($row['more']) && is_array($row['more'])) {
            $extras = '';
            foreach ($row['more'] as $extra) {
                if (!is_array($extra)) {
                    continue;
                }
                $extras .= _cell_link(_link_pick($extra, ['text', 'title']), _link_pick($extra, ['url']));
            }
            if ($extras !== '') {
                $titleHtml = '<div class="link-cell">' . $titleHtml . $extras . '</div>';
            }
        }
        $arxivHtml = _arxiv_cell($row);

        echo '      <tr>' . "\n";
        _td_text($date);
        if ($hasTopic) {
            _td_text($topic);
        }
        _td_text($authors);
        _td($titleHtml);
        _td_text($journal);
        _td($arxivHtml);
        echo '      </tr>' . "\n";
    }

    _table_close();
}
