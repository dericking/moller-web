<?php
/** tools/ is for listed calculators, not the section hub — that is links/. */
require_once dirname(__DIR__) . '/_includes/bootstrap.php';
header('Location: ' . site_url('links/'), true, 301);
exit;
