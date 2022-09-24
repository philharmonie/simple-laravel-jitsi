<?php

if (!function_exists('slug')) {
    /**
     * Create a slug from a string.
     *
     * @param string $string
     * @param string $separator
     * @return string
     */
    function slug(string $string, string $separator = '-'): string
    {
        $string = mb_strtolower($string);
        $string = preg_replace('/[^\p{L}\p{Nd}]+/u', $separator, $string);
        $string = trim($string, $separator);

        return $string;
    }
}
