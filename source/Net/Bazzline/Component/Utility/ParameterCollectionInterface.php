<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-12
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class ParametrizeInterface
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-12
 */
interface ParameterCollectionInterface
{
    /**
     * @param string $name
     * @param mixed $value
     * @param bool $isMandatory
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function addParameter($name, $value, $isMandatory = false);

    /**
     * @param array $parameters
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function addParameters(array $parameters);

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function hasParameter($name);

    /**
     * @param string $name
     * @return null|mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function getParameter($name);
}
