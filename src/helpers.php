<?php

if (! function_exists('enjp')) {
    /**
     * Convert English text to Romanji using the Enjp package.
     *
     * @param  string  $text
     * @return string
     */
    function enjp($text)
    {
        return \Hawkiq\Enjp\Enjp::romanji($text);
    }
}
