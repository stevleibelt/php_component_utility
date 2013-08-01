<?php

namespace Net\Bazzline\Component\Utility;

class String
{
    public function replaceUmlauts($string)
    {
        $umlauts = array(
            'ä' => 'ae'
        );

        foreach ($umlauts as $search => $replace) {
            $string = str_replace($search, $replace, $string);
        }

        return $string;
    }

    public function contains($search, $string)
    {
        return (strpos($search, $string) !== false);
    }

    public function startsWith($prefix, $string)
    {
        return strpos($string, $prefix) === 0;
    }

    public function endsWith($suffix, $string)
    {
        return substr($string, 0 - strlen($suffix)) == $suffix;
    }
}
