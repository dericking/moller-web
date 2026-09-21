<?php
/**
 * Talk / presentation tables.
 *
 * Loaded via _includes/bootstrap.php. Separate from link_table() / publication_table().
 *
 *   talks_table('Talks & Presentations', [
 *       [
 *           'date'      => '03-2023',
 *           'title'     => 'Møller Polarimetry High-Precision Systematic Studies',
 *           'url'       => 'talks/slides.pdf',
 *           'presenter' => 'Eric King',
 *           'event'     => 'Hall-A Weekly Meeting',
 *       ],
 *   ]);
 *
 * Optional extra slides in the title cell:
 *   'more' => [ ['text' => 'version with backup slides', 'url' => '…'] ]
 *
 * Usable on any page after bootstrap.php.
 */

function talks_table($heading, array $rows) {
    if (!$rows) {
        $heading = trim((string) $heading);
        if ($heading !== '') {
            echo '<h2>' . htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') . '</h2>' . "\n";
        }
        return;
    }

    $rows = _rows_sort_by_date($rows, 'date-desc');

    _table_open($heading, function () {
        _th('Date', 'fa fa-regular fa-calendar', 'col-date');
        _th('Title and Link', 'fa fa-solid fa-link');
        _th('Presenter', 'fa fa-solid fa-user');
        _th('Event', 'fa-solid fa-location-dot');
    });

    foreach ($rows as $row) {
        if (!is_array($row)) {
            continue;
        }
        $date = _link_pick($row, ['date']);
        $title = _link_pick($row, ['title']);
        $url = _link_pick($row, ['url']);
        $presenter = _link_pick($row, ['presenter', 'author', 'speaker']);
        $event = _link_pick($row, ['event', 'venue']);

        $titleHtml = '<div class="link-cell">';
        $titleHtml .= _cell_link($title, $url);
        if (!empty($row['more']) && is_array($row['more'])) {
            foreach ($row['more'] as $extra) {
                if (!is_array($extra)) {
                    continue;
                }
                $extraText = _link_pick($extra, ['text', 'title']);
                $extraUrl = _link_pick($extra, ['url']);
                $titleHtml .= _cell_link($extraText, $extraUrl);
            }
        }
        $titleHtml .= '</div>';

        echo '      <tr>' . "\n";
        _td_text($date);
        _td($titleHtml);
        _td_text($presenter);
        _td_text($event);
        echo '      </tr>' . "\n";
    }

    _table_close();
}
