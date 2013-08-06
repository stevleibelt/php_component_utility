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
     * based on: http://stackoverflow.com/questions/3371697/replacing-accented-characters-php
     *  and: http://stackoverflow.com/questions/3230012/replacing-accents-with-their-counterparts
     */
    public function replaceUmlauts($string, $ignoreCase = true)
    {
        $umlauts = array(
            'A' => array(
                'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ă'
            ),
            'a' => array(
                'à', 'á', 'â', 'ã', 'ä', 'å', 'ă', 'æ'
            ),
            'B' => array(
                'Þ'
            ),
            'b' => array(
                'þ'
            ),
            'C' => array(
                'Ç'
            ),
            'c' => array(
                'ç'
            ),
            'E' => array(
                'È', 'É', 'Ê', 'Ë'
            ),
            'e' => array(
                'è', 'é', 'ê', 'ë'
            ),
            'G' => array(
                'Ğ'
            ),
            'g' => array(
                'ğ'
            ),
            'I' => array(
                'Ì', 'Í', 'Î', 'Ï', 'İ'
            ),
            'i' => array(
                'ı', 'ì', 'í', 'î', 'ï'
            ),
            'N' => array(
                'Ñ'
            ),
            'n' => array(
                'ñ'
            ),
            'O' => array(
                'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø'
            ),
            'o' => array(
                'ö', 'ø', 'ð', 'ò', 'ó', 'ô', 'õ'
            ),
            'S' => array(
                'Š', 'Ş', 'Ș'
            ),
            's' => array(
                'š', 'ș', 'ş'
            ),
            'sz' => array(
                'ß'
            ),
            'T' => array(
                'Ț'
            ),
            't' => array(
                'ț'
            ),
            'U' => array(
                'Ù', 'Ú', 'Û', 'Ü'
            ),
            'u' => array(
                'ù', 'ú', 'û', 'ü'
            ),
            'Y' => array(
                'Ý'
            ),
            'y' => array(
                'ý', 'ý', 'ÿ'
            ),
            'Z' => array(
                'Ž'
            ),
            'z' => array(
                'ž'
            )
        );

        foreach ($umlauts as $replace => $searches) {
            $string = $this->string
                ->setValue($string)
                ->replace($searches, $replace, $ignoreCase)
                ->getValue();
        }

        return $string;
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
