<?php

namespace Hawkiq\Enjp;

class Enjp
{
    /**
     * The function `romanji` converts a given text into Romaji (Romanized Japanese) using a predefined
     * mapping of characters and specific patterns.
     * 
     * @param text The code you provided is a PHP function that converts a given text into Romaji,
     * which is the romanization of Japanese characters. The function maps each English alphabet
     * character to its Romaji equivalent and then processes the input text to replace specific
     * patterns like 'ch', 'sh', 'ts', 'th
     * 
     * @return string The function `romanji()` takes a string input, converts it to Romaji (Japanese
     * writing system using Latin characters), and returns the Romaji version of the input text with
     * the first letter capitalized.
     */
    public static function romanji($text)
    {
        $map = [
            'a' => 'a',
            'b' => 'bu',
            'c' => 'ku',
            'd' => 'do',
            'e' => 'e',
            'f' => 'fu',
            'g' => 'gu',
            'h' => 'ha',
            'i' => 'i',
            'j' => 'ji',
            'k' => 'ka',
            'l' => 'ru',
            'm' => 'mu',
            'n' => 'n',
            'o' => 'o',
            'p' => 'pu',
            'q' => 'ku',
            'r' => 'ru',
            's' => 'su',
            't' => 'to',
            'u' => 'u',
            'v' => 'bu',
            'w' => 'wa',
            'x' => 'ku',
            'y' => 'ya',
            'z' => 'zu',
            'ch' => 'chi',
            'sh' => 'shi',
            'ts' => 'tsu',
            'th' => 'su',
            'ph' => 'fu'
        ];

        $patterns = [
            '/ch/' => 'chi',
            '/sh/' => 'shi',
            '/ts/' => 'tsu',
            '/th/' => 'su',
            '/ph/' => 'fu'
        ];

        foreach ($patterns as $pattern => $replacement) {
            $text = preg_replace($pattern, $replacement, $text);
        }

        $text = str_split(strtolower($text));
        $romaji = '';

        foreach ($text as $char) {
            $romaji .= $map[$char] ?? $char;
        }

        return ucfirst($romaji);
    }
}
