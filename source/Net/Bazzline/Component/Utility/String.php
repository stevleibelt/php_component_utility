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

    public function contains($search, $string, $searchCaseSensitive = true)
    {
        if ($searchCaseSensitive) {
            return (strpos($search, $string) !== false);
        } else {
            return (stripos($search, $string) !== false);
        }
    }

    public function startsWith($prefix, $string, $searchCaseSensitive = true)
    {
        if ($searchCaseSensitive) {
            return strpos($string, $prefix) === 0;
        } else {
            return stripos($string, $prefix) === 0;
        }
    }

    public function endsWith($suffix, $string, $searchCaseSensitive = true)
    {
        if ($searchCaseSensitive) {
            return substr($string, 0 - strlen($suffix)) == $suffix;
        } else {
            return strtolower(substr($string, 0 - strlen($suffix))) == strtolower($suffix);
        }
    }
}
