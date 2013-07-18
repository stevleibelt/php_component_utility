<?php

namespace Net\Bazzline\Component\Utility;

class String
{
    public function startsWith($prefix, $string)
    {
        return strpos($string, $prefix) === 0;
    }

    public function endsWith($suffix, $string)
    {
        return substr($string, 0 - strlen($suffix)) == $suffix;
    }
}
