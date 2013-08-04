<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-18
 */

namespace Net\Bazzline\Component\Utility;

use Net\Bazzline\Component\DataType\String as StringClass;

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
     * @var \Net\Bazzline\Component\DataType\String
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    protected $string;

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    public function __construct()
    {
        $this->string = new StringClass();
    }

    /**
     * {@inheritdoc}
     */
    public function replace($search, $replace, $string, $ignoreCase = true)
    {
        return (string) $this->string
            ->setValue($string)
            ->replace($search, $replace, $ignoreCase);
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

        return (string) $this->string
            ->setValue($string)
            ->replace(array_keys($umlauts), array_values($umlauts), $ignoreCase);
    }

    /**
     * {@inheritdoc}
     */
    public function contains($search, $string, $ignoreCase = true)
    {
        return (string) $this->string
            ->setValue($string)
            ->contains($search, $ignoreCase);
    }

    /**
     * {@inheritdoc}
     */
    public function startsWith($prefix, $string, $ignoreCase = true)
    {
        return (string) $this->string
            ->setValue($string)
            ->startsWith($prefix, $ignoreCase);
    }

    /**
     * {@inheritdoc}
     */
    public function endsWith($suffix, $string, $ignoreCase = true)
    {
        return (string) $this->string
            ->setValue($string)
            ->endsWith($suffix, $ignoreCase);
    }
}
