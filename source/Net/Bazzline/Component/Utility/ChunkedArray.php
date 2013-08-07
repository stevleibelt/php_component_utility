<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-04
 */

namespace Net\Bazzline\Component\Utility;

use ArrayAccess;
use Countable:
use Iterator;

/**
 * Class ChunkedArray
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-04
 * @todo: Split up thinks in more generic classes
 * @todo: http://www.php.net/manual/en/class.seekableiterator.php
 */
class ChunkedArray implements ArrayAccess, Countable, Iterator
{
    /**
     * @var array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    protected $array;

    /**
     * @var int
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    protected $arraySize;

    /**
     * @var int
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    protected $chunkSize;

    /**
     * @param array $array
     * @param null|int $chunkSize
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    public function __construct(array $array = array(), $chunkSize = null)
    {
        $this->setArray($array);
        if (!is_null($chunkSize)) {
            $this->setChunkSize($chunkSize);
        }
    }

    /**
     * Only array values where used and returned
     *
     * @param array $array
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    public function setArray(array $array)
    {
        $this->array = array_values($array);
        $this->arraySize = count($this->array);
        $this->rewind();

        return $this;
    }

    /**
     * @param int $chunkSize
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-04
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = (int) $chunkSize;
        $this->setArray(array_chunk($this->array, $this->chunkSize));

        return $this;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     *
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current()
    {
        return current($this->array);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     *
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        next($this->array);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     *
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return key($this->array);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     *
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return ($this->current() !== false);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        reset($this->array);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     *
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->array);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     *
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     *
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->array[$offset] : null;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     *
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->array[] = $value;
        } else {
            $this->array[$offset] = $value;
        }
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     *
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        if (!is_null($offset)) {
            unset($this->array[$offset]);
        }
    }

    /*
     * @return int
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-07
     */
    public function count()
    {
        return count($this->array);
    }
}
