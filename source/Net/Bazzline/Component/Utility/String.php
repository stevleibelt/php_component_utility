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
class String implements StringInterface
{
    /**
     * {@inheritdoc}
     */
    public function replace($search, $replace, $string, $ignoreCase = true)
    {
        if ($ignoreCase) {
            $return = str_ireplace($search, $replace, $string);
        } else {
            $return = str_replace($search, $replace, $string);
        }

        return $return;
    }

    /**
     * {@inheritdoc}
     */
    public function replaceUmlauts($string, $ignoreCase = true)
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

        $return = $this->replace(array_keys($umlauts), array_values($umlauts), $string, $ignoreCase);

        return $return;
    }

    /**
     * {@inheritdoc}
     */
    public function contains($search, $string, $ignoreCase = true)
    {
        if ($ignoreCase) {
            return (strpos($string, $search) !== false);
        } else {
            return (stripos($string, $search) !== false);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function startsWith($prefix, $string, $ignoreCase = true)
    {
        if ($ignoreCase) {
            return strpos($string, $prefix) === 0;
        } else {
            return stripos($string, $prefix) === 0;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function endsWith($suffix, $string, $ignoreCase = true)
    {
        if ($ignoreCase) {
            return substr($string, 0 - strlen($suffix)) == $suffix;
        } else {
            return strtolower(substr($string, 0 - strlen($suffix))) == strtolower($suffix);
        }
    }
}
