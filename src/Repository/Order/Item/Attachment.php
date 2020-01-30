<?php

namespace Occtoplus\VTEX\Repository\Order\Item;

/**
 * Class Attachment
 *
 * @category Library
 * @package  Occtoplus\VTEX
 * @author   Fábio Rodriguez <brajola@gmail.com>
 * @license  https://pt.wikipedia.org/wiki/GNU_General_Public_License GPL
 * @link     https://github.com/brajola/vtex
 *
 */
class Attachment
{
    protected $_content;
    protected $_name;

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->_content = $content;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }
}
