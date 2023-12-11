<?php

namespace Krzysztofzylka\Strings;

class Strings
{

    /**
     * Escape string
     * @param ?string $string
     * @return ?string
     */
    public static function escape(?string $string): ?string
    {
        if (is_null($string)) {
            return null;
        }

        $string = str_replace(["\n", "\r", "\t"], ["\\n", "\\r", "\\t"], $string);

        return addslashes($string);
    }


    /**
     * Undo escape string
     * @param ?string $string
     * @return ?string
     */
    public static function undoEscape(?string $string): ?string
    {
        if (is_null($string)) {
            return null;
        }

        $string = str_replace(["\\\\n", "\\\\r", "\\\\t"], ["\n", "\r", "\t"], $string);

        return addslashes($string);
    }

    /**
     * Lowercase and clean string
     * @param string $string The input string to be lowercased and cleaned
     * @return string The lowercased and cleaned string
     */
    public static function lowerCleanString(string $string): string
    {
        return trim(strtolower(htmlspecialchars($string)));
    }

    /**
     * Cleans the given string by removing all non-alphanumeric characters and replacing spaces with dashes.
     * @param string $data The string to be cleaned.
     * @return string The cleaned string.
     */
    public static function clean(string $data): string
    {
        return preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $data));
    }

    /**
     * Get first x words
     * @param string $string
     * @param int $length
     * @return string
     */
    public static function substrWithoutLastWord(string $string, int $length): string
    {
        if (strlen($string) <= $length) {
            return $string;
        }

        $string = substr($string, 0, $length);
        $explodeString = explode(' ', $string);
        $lastWord = end($explodeString);

        return substr($string, 0, $length - (strlen($lastWord) + 1));
    }

    /**
     * Remove line breaks
     * @param string $string
     * @return string
     */
    public static function removeLineBreaks(string $string): string
    {
        return str_replace(["\n", "\r", '<br />', '<br>', '<br/>'], '', $string);
    }

    /**
     * Camelize string with separator
     * @param string $string
     * @param string $separator
     * @return string
     */
    public static function camelizeString(string $string, string $separator = ''): string
    {
        return str_replace($separator, '', ucwords($string, $separator));
    }

    /**
     * Decamelize string with separator
     * @param string $string
     * @param string $separator
     * @return string
     */
    public static function decamelizeString(string $string, string $separator = '_'): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', $separator . '$0', $string));
    }


}