<?php
/**
 * Site root bootstrap. Section pages should:
 *   require_once dirname(__DIR__) . '/_includes/bootstrap.php';
 * Nested: dirname(dirname(__DIR__)) … (PHP 5.4 — no dirname($path, $levels)).
 */
if (!defined('MOLLER_ROOT')) {
    define('MOLLER_ROOT', dirname(__DIR__));
}
require_once MOLLER_ROOT . '/_includes/compat.php';
require_once MOLLER_ROOT . '/_includes/layout.php';
require_once MOLLER_ROOT . '/_includes/page.php';
require_once MOLLER_ROOT . '/_includes/tables.php';
require_once MOLLER_ROOT . '/_includes/publications.php';
require_once MOLLER_ROOT . '/_includes/talks.php';
