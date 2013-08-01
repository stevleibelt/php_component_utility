<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-18
 */
namespace Net\Bazzline\Component\Utility;

/**
 * Class String
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-18
 */
class String
{
    /**
     * Replaces german umlauts.
     * Example: 'Ü' => 'Ue'
     *
     * @param string $string
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-18
     */
    public function replaceUmlauts($string)
    {
        $umlauts = array(
            'ä' => 'ae',
            'ö' => 'oe',
            'ü' => 'ue',
            'ß' => 'sz',
            'Ä' => 'Ae',
            'Ö' => 'Oe',
            'Ü' => 'Ue'
        );

        foreach ($umlauts as $search => $replace) {
            $string = str_replace($search, $replace, $string);
        }

        return $string;
    }

    /**
     * Returns true if $string contains $search
     *
     * @param string $search
     * @param string $string
     * @param bool $searchCaseSensitive
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function contains($search, $string, $searchCaseSensitive = true)
    {
        if ($searchCaseSensitive) {
            return (strpos($search, $string) !== false);
        } else {
            return (stripos($search, $string) !== false);
        }
    }

    /**
     * Returns true if $string starts with $prefix
     *
     * @param $prefix
     * @param $string
     * @param bool $searchCaseSensitive
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-18
     */
    public function startsWith($prefix, $string, $searchCaseSensitive = true)
    {
        if ($searchCaseSensitive) {
            return strpos($string, $prefix) === 0;
        } else {
            return stripos($string, $prefix) === 0;
        }
    }

    /**
     * Returns true if $string ends with $suffix
     *
     * @param string $suffix
     * @param string $string
     * @param bool $searchCaseSensitive
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-18
     */
    public function endsWith($suffix, $string, $searchCaseSensitive = true)
    {
        if ($searchCaseSensitive) {
            return substr($string, 0 - strlen($suffix)) == $suffix;
        } else {
            return strtolower(substr($string, 0 - strlen($suffix))) == strtolower($suffix);
        }
    }
}
