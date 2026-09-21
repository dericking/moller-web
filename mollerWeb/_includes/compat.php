<?php
/**
 * PHP 5.4 compatibility shims (hallaweb-era target).
 * Loaded first from bootstrap.php / dir_index.php.
 */

if (!function_exists('str_starts_with')) {
    function str_starts_with($haystack, $needle) {
        $haystack = (string) $haystack;
        $needle = (string) $needle;
        if ($needle === '') {
            return true;
        }
        return strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}

if (!function_exists('str_ends_with')) {
    function str_ends_with($haystack, $needle) {
        $haystack = (string) $haystack;
        $needle = (string) $needle;
        if ($needle === '') {
            return true;
        }
        $len = strlen($needle);
        if ($len > strlen($haystack)) {
            return false;
        }
        return substr($haystack, -$len) === $needle;
    }
}

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        $haystack = (string) $haystack;
        $needle = (string) $needle;
        if ($needle === '') {
            return true;
        }
        return strpos($haystack, $needle) !== false;
    }
}

if (!function_exists('array_key_last')) {
    function array_key_last($array) {
        if (!is_array($array) || !$array) {
            return null;
        }
        end($array);
        return key($array);
    }
}

if (!function_exists('array_key_first')) {
    function array_key_first($array) {
        if (!is_array($array) || !$array) {
            return null;
        }
        reset($array);
        return key($array);
    }
}

if (!function_exists('array_is_list')) {
    function array_is_list($array) {
        if (!is_array($array)) {
            return false;
        }
        if ($array === array()) {
            return true;
        }
        return array_keys($array) === range(0, count($array) - 1);
    }
}
