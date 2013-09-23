<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-09-23
 */

namespace Net\Bazzline\Component\Utility;

use SplObjectStorage;

/**
 * Class ParameterCollection
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-09-23
 */
class ParameterCollection implements ParameterCollectionInterface
{
    /**
     * @var SplObjectStorage
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-23
     */
    protected $storage;

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-23
     */
    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    /**
     * @param ParameterInterface $parameter
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function addParameter(ParameterInterface $parameter)
    {
        $this->storage->attach($parameter);

        return $this;
    }

    /**
     * @param array $parameters
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function addParameters(array $parameters)
    {
        foreach ($parameters as $parameter) {
            if ($parameter instanceof ParameterInterface) {
                $this->addParameter($parameter);
            }
        }

        return $this;
    }

    /**
     * @param ParameterInterface $parameter
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function hasParameter(ParameterInterface $parameter)
    {
        return $this->storage->contains($parameter);
    }

    /**
     * @return array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-12
     */
    public function getParameters()
    {
        return (array) $this->storage;
    }
}