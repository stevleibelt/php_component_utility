<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-09-23
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class Parameter
 * You should extend this class and use meaningful class names to enable type hinting
 * Furthermore, you can set a default value in the constructor (if wanted).
 * You can filter/validate the input for setValue by extending the empty
 *  "setValueFilter" method. This method has to return bool of false.
 * By overwriting the "isMandatory" method, you can define if a parameter should
 *  be treated as mandatory or not.
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-09-23
 */
class Parameter implements ParameterInterface
{
    /**
     * @var mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-23
     */
    protected $value;

    /**
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function setValue($value)
    {
        if ($this->filterValue($value)) {
            $this->value = $value;
        }

        return $this;
    }

    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-23
     */
    public function hasValue()
    {
        return (!is_null($this->value));
    }

    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-23
     */
    public function isMandatory()
    {
        return false;
    }

    /**
     * @param mixed $value
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-23
     */
    protected function filterValue($value)
    {
        return true;
    }
}