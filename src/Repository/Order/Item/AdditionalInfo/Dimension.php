<?php

namespace Occtoplus\VTEX\Repository\Order\Item\AdditionalInfo;

/**
 * Class Dimension
 *
 * @category Library
 * @package  Occtoplus\VTEX
 * @author   Fábio Rodriguez <brajola@gmail.com>
 * @license  https://pt.wikipedia.org/wiki/GNU_General_Public_License GPL
 * @link     https://github.com/brajola/vtex
 *
 */
class Dimension
{
    protected $_cubicweight;
    protected $_height;
    protected $_length;
    protected $_weight;
    protected $_width;

    /**
     * @return mixed
     */
    public function getCubicweight()
    {
        return $this->_cubicweight;
    }

    /**
     * @param mixed $cubicweight
     */
    public function setCubicweight($cubicweight)
    {
        $this->_cubicweight = $cubicweight;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->_height = $height;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->_length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->_length = $length;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->_weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->_weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->_width = $width;
    }
}
