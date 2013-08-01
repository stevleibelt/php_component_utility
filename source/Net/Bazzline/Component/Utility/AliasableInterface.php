<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01 
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class AliasableInterface
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01
 */
interface AliasableInterface
{
    /**
     * @return null|string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function getAlias();

    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function hasAlias();

    /**
     * @param string $alias
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function setAlias($alias);
}