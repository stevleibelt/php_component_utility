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
     * @param ParameterInterface $parameter
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function addParameter(ParameterInterface $parameter);

    /**
     * @param array $parameters
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function addParameters(array $parameters);

    /**
     * @param ParameterInterface $parameter
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function hasParameter(ParameterInterface $parameter);

    /**
     * @return array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function getParameters();
}
