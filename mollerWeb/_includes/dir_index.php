<?php
/**
 * File listing for folders that used to be Apache directory indexes.
 * Each folder gets a small index.php that calls render_dir_index().
 */
require_once __DIR__ . '/bootstrap.php';

function dir_index_skip_name($name) {
    if ($name === '.' || $name === '..') {
        return true;
    }
    if ($name[0] === '.') {
        return true;
    }
    if (str_ends_with($name, '~') || str_ends_with($name, '.bak')) {
        return true;
    }
    if (in_array($name, ['index.php', 'index.html', '.htaccess'], true)) {
        return true;
    }
    return false;
}

function dir_index_human_size($bytes) {
    $bytes = (int) $bytes;
    $units = ['B', 'KB', 'MB', 'GB'];
    $i = 0;
    $n = (float) $bytes;
    while ($n >= 1024 && $i < count($units) - 1) {
        $n /= 1024;
        $i++;
    }
    $fmt = $i === 0 ? '%d %s' : '%.1f %s';
    return sprintf($fmt, $n, $units[$i]);
}

function render_dir_index($heading, $currentHref = 'index.php') {
    $dir = dirname($_SERVER['SCRIPT_FILENAME']);
    $entries = @scandir($dir);
    if ($entries === false) {
        $entries = [];
    }

    $dirs = [];
    $files = [];
    foreach ($entries as $name) {
        if (dir_index_skip_name($name)) {
            continue;
        }
        $path = $dir . DIRECTORY_SEPARATOR . $name;
        if (is_dir($path)) {
            $dirs[] = $name;
        } else {
            $files[] = $name;
        }
    }
    natcasesort($dirs);
    natcasesort($files);
    $dirs = array_values($dirs);
    $files = array_values($files);

    PageTitle($heading);
    PageSubtitle("File index — not a raw directory listing");
    PageStart($currentHref);

    if ($dirs) {
        echo '<h2>Folders</h2><div class="list-table-wrap"><table class="list-table"><thead><tr><th>Folder</th></tr></thead><tbody>';
        foreach ($dirs as $name) {
            $href = rawurlencode($name) . '/';
            echo '<tr><td><a href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</a></td></tr>';
        }
        echo '</tbody></table></div>';
    }

    echo '<h2>Files</h2>';
    if (!$files) {
        echo '<p>No files in this folder.</p>';
        PageEnd();
        return;
    }

    $imgExt = ['png', 'jpg', 'jpeg', 'gif', 'webp'];
    echo '<div class="list-table-wrap"><table class="list-table"><thead><tr><th>Name</th><th>Type</th><th>Size</th></tr></thead><tbody>';
    foreach ($files as $name) {
        $path = $dir . DIRECTORY_SEPARATOR . $name;
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $href = rawurlencode($name);
        $label = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $cell = '<a href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '">' . $label . '</a>';
        if (in_array($ext, $imgExt, true)) {
            $cell = '<img class="dir-thumb" src="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '" alt=""> ' . $cell;
        }
        echo '<tr><td>' . $cell . '</td><td>' . htmlspecialchars($ext !== '' ? $ext : '—', ENT_QUOTES, 'UTF-8') . '</td><td>' . htmlspecialchars(dir_index_human_size(filesize($path)), ENT_QUOTES, 'UTF-8') . '</td></tr>';
    }
    echo '</tbody></table></div>';
    PageEnd();
}
