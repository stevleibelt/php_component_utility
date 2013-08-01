<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01 
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class StringUtilityInterface
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01
 */
interface StringInterface
{
    /**
     * @param string|array $search
     * @param string|array $replace
     * @param string $string
     * @param bool $ignoreCase
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function replace($search, $replace, $string, $ignoreCase = true);

    /**
     * @param string $string
     * @param bool $ignoreCase
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function replaceUmlauts($string, $ignoreCase = true);

    /**
     * @param string $search
     * @param string $string
     * @param bool $ignoreCase
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function contains($search, $string, $ignoreCase = true);

    /**
     * @param string $prefix
     * @param string $string
     * @param bool $ignoreCase
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function startsWith($prefix, $string, $ignoreCase = true);

    /**
     * @param string $suffix
     * @param string $string
     * @param bool $ignoreCase
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function endsWith($suffix, $string, $ignoreCase = true);
}