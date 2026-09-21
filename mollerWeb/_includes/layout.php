<?php
/**
 * Shared header / left nav / footer.
 * Caretaker: edit _includes/config.php for links. Do not copy chrome into pages.
 *
 * layout_start($title, $currentHref, $showSidebar = true)
 *   $showSidebar false — public home (index.php). All other pages keep the nav.
 */
require_once __DIR__ . '/config.php';

function nav_is_current($itemHref, $currentHref) {
    $currentHref = trim((string) $currentHref);
    if ($itemHref === 'index.php') {
        return $currentHref === 'index.php' || $currentHref === '' || $currentHref === '/';
    }
    $prefix = rtrim($itemHref, '/');
    return $currentHref === $itemHref
        || $currentHref === $prefix
        || str_starts_with($currentHref, $prefix . '/');
}

function layout_start($pageTitle = '', $currentHref = 'index.php', $showSidebar = true) {
    global $siteTitle, $nav;
    $title = $pageTitle === '' ? $siteTitle : $pageTitle . ' — ' . $siteTitle;
    $cssHref = site_url('_assets/style.css');
    $cssFile = dirname(__DIR__) . '/_assets/style.css';
    if (is_file($cssFile)) {
        $cssHref .= '?v=' . filemtime($cssFile);
    }
    $css = htmlspecialchars($cssHref, ENT_QUOTES, 'UTF-8');
    $faHref = site_url('_assets/fontawesome/css/icons.css');
    $faFile = dirname(__DIR__) . '/_assets/fontawesome/css/icons.css';
    if (is_file($faFile)) {
        $faHref .= '?v=' . filemtime($faFile);
    }
    $fa = htmlspecialchars($faHref, ENT_QUOTES, 'UTF-8');
    $home = htmlspecialchars(site_url('index.php'), ENT_QUOTES, 'UTF-8');
    $bodyClass = $showSidebar ? 'site-app' : 'site-app site-app--no-nav';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="stylesheet" href="<?= $css ?>">
  <link rel="stylesheet" href="<?= $fa ?>">
</head>
<body class="<?= $bodyClass ?>">
  <div class="site-shell">
  <?php if ($showSidebar): ?>
  <aside class="site-sidebar" aria-label="Site">
    <input type="checkbox" id="site-nav-toggle" class="site-nav-toggle">
    <div class="site-sidebar-top">
      <p class="site-sidebar-brand"><a href="<?= $home ?>"><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></a></p>
      <label class="site-nav-burger" for="site-nav-toggle">
        <span class="site-nav-burger-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Menu</span>
      </label>
    </div>
    <ul class="site-sidebar-list">
      <?php foreach ($nav as $item):
          $href = site_url($item['href']);
          $current = nav_is_current($item['href'], $currentHref) ? ' aria-current="page"' : '';
      ?>
      <li>
        <a href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>"<?= $current ?>>
          <?php if (!empty($item['icon'])): ?>
          <i class="<?= htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"></i>
          <?php endif; ?>
          <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </aside>
  <?php endif; ?>
  <div class="site-main">
  <div class="wrap-wide">
    <?php
}

function layout_end() {
    global $siteTitle;
    ?>
  <footer class="site-footer">
    <p><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> webpage is managed by the Jefferson Lab Hall-A Møller Polarimeter Working Group.</p>
  </footer>
  </div>
  </div>
  </div>
</body>
</html>
    <?php
}
