<?php

namespace Occtoplus\VTEX\Repository\Order\Item;

/**
 * Class AdditionalInfo
 *
 * @category Library
 * @package  Occtoplus\VTEX
 * @author   Fábio Rodriguez <brajola@gmail.com>
 * @license  https://pt.wikipedia.org/wiki/GNU_General_Public_License GPL
 * @link     https://github.com/brajola/vtex
 *
 */
class AdditionalInfo
{
    protected $_brandName;
    protected $_brandId;
    protected $_categoriesIds;
    protected $_productClusterId;
    protected $_commercialConditionId;
    protected $_offeringInfo;
    protected $_offeringType;
    protected $_offeringTypeId;
    protected $_dimension;

    /**
     * @return mixed
     */
    public function getBrandName()
    {
        return $this->_brandName;
    }

    /**
     * @param mixed $brandName
     */
    public function setBrandName($brandName)
    {
        $this->_brandName = $brandName;
    }

    /**
     * @return mixed
     */
    public function getBrandId()
    {
        return $this->_brandId;
    }

    /**
     * @param mixed $brandId
     */
    public function setBrandId($brandId)
    {
        $this->_brandId = $brandId;
    }

    /**
     * @return mixed
     */
    public function getCategoriesIds()
    {
        return $this->_categoriesIds;
    }

    /**
     * @param mixed $categoriesIds
     */
    public function setCategoriesIds($categoriesIds)
    {
        $this->_categoriesIds = $categoriesIds;
    }

    /**
     * @return mixed
     */
    public function getProductClusterId()
    {
        return $this->_productClusterId;
    }

    /**
     * @param mixed $productClusterId
     */
    public function setProductClusterId($productClusterId)
    {
        $this->_productClusterId = $productClusterId;
    }

    /**
     * @return mixed
     */
    public function getCommercialConditionId()
    {
        return $this->_commercialConditionId;
    }

    /**
     * @param mixed $commercialConditionId
     */
    public function setCommercialConditionId($commercialConditionId)
    {
        $this->_commercialConditionId = $commercialConditionId;
    }

    /**
     * @return mixed
     */
    public function getOfferingInfo()
    {
        return $this->_offeringInfo;
    }

    /**
     * @param mixed $offeringInfo
     */
    public function setOfferingInfo($offeringInfo)
    {
        $this->_offeringInfo = $offeringInfo;
    }

    /**
     * @return mixed
     */
    public function getOfferingType()
    {
        return $this->_offeringType;
    }

    /**
     * @param mixed $offeringType
     */
    public function setOfferingType($offeringType)
    {
        $this->_offeringType = $offeringType;
    }

    /**
     * @return mixed
     */
    public function getOfferingTypeId()
    {
        return $this->_offeringTypeId;
    }

    /**
     * @param mixed $offeringTypeId
     */
    public function setOfferingTypeId($offeringTypeId)
    {
        $this->_offeringTypeId = $offeringTypeId;
    }

    /**
     * @return mixed
     */
    public function getDimension()
    {
        return $this->_dimension;
    }

    /**
     * @param mixed $dimension
     */
    public function setDimension($dimension)
    {
        $this->_dimension = $dimension;
    }
}
