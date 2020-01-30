<?php

namespace Occtoplus\VTEX\Repository\Order;

/**
 * Class Item
 *
 * @category Library
 * @package  Occtoplus\VTEX
 * @author   Fábio Rodriguez <brajola@gmail.com>
 * @license  https://pt.wikipedia.org/wiki/GNU_General_Public_License GPL
 * @link     https://github.com/brajola/vtex
 *
 */
class Item
{
    protected $_uniqueId;
    protected $_id;
    protected $_productId;
    protected $_ean;
    protected $_lockId;
    protected $_quantity;
    protected $_seller;
    protected $_name;
    protected $_refId;
    protected $_price;
    protected $_listPrice;
    protected $_manualPrice;
    protected $_priceTags;
    protected $_imageUrl;
    protected $_detailUrl;
    protected $_components;
    protected $_bundleItems;
    protected $_params;
    protected $_offerings;
    protected $_sellerSku;
    protected $_priceValidUntil;
    protected $_commission;
    protected $_tax;
    protected $_preSaleDate;
    protected $_measurementUnit;
    protected $_unitMultiplier;
    protected $_sellingPrice;
    protected $_isGift;
    protected $_shippingPrice;
    protected $_rewardValue;
    protected $_freightCommission;
    protected $_priceDefinitions;
    protected $_taxCode;
    protected $_parentItemIndex;
    protected $_parentAssemblyBinding;

    /**
     * @return mixed
     */
    public function getUniqueId()
    {
        return $this->_uniqueId;
    }

    /**
     * @param mixed $uniqueId
     */
    public function setUniqueId($uniqueId)
    {
        $this->_uniqueId = $uniqueId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->_productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->_productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->_ean;
    }

    /**
     * @param mixed $ean
     */
    public function setEan($ean)
    {
        $this->_ean = $ean;
    }

    /**
     * @return mixed
     */
    public function getLockId()
    {
        return $this->_lockId;
    }

    /**
     * @param mixed $lockId
     */
    public function setLockId($lockId)
    {
        $this->_lockId = $lockId;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->_quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getSeller()
    {
        return $this->_seller;
    }

    /**
     * @param mixed $seller
     */
    public function setSeller($seller)
    {
        $this->_seller = $seller;
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

    /**
     * @return mixed
     */
    public function getRefId()
    {
        return $this->_refId;
    }

    /**
     * @param mixed $refId
     */
    public function setRefId($refId)
    {
        $this->_refId = $refId;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->_price = $price;
    }

    /**
     * @return mixed
     */
    public function getListPrice()
    {
        return $this->_listPrice;
    }

    /**
     * @param mixed $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->_listPrice = $listPrice;
    }

    /**
     * @return mixed
     */
    public function getManualPrice()
    {
        return $this->_manualPrice;
    }

    /**
     * @param mixed $manualPrice
     */
    public function setManualPrice($manualPrice)
    {
        $this->_manualPrice = $manualPrice;
    }

    /**
     * @return mixed
     */
    public function getPriceTags()
    {
        return $this->_priceTags;
    }

    /**
     * @param mixed $priceTags
     */
    public function setPriceTags($priceTags)
    {
        $this->_priceTags = $priceTags;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->_imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->_imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getDetailUrl()
    {
        return $this->_detailUrl;
    }

    /**
     * @param mixed $detailUrl
     */
    public function setDetailUrl($detailUrl)
    {
        $this->_detailUrl = $detailUrl;
    }

    /**
     * @return mixed
     */
    public function getComponents()
    {
        return $this->_components;
    }

    /**
     * @param mixed $components
     */
    public function setComponents($components)
    {
        $this->_components = $components;
    }

    /**
     * @return mixed
     */
    public function getBundleItems()
    {
        return $this->_bundleItems;
    }

    /**
     * @param mixed $bundleItems
     */
    public function setBundleItems($bundleItems)
    {
        $this->_bundleItems = $bundleItems;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->_params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->_params = $params;
    }

    /**
     * @return mixed
     */
    public function getOfferings()
    {
        return $this->_offerings;
    }

    /**
     * @param mixed $offerings
     */
    public function setOfferings($offerings)
    {
        $this->_offerings = $offerings;
    }

    /**
     * @return mixed
     */
    public function getSellerSku()
    {
        return $this->_sellerSku;
    }

    /**
     * @param mixed $sellerSku
     */
    public function setSellerSku($sellerSku)
    {
        $this->_sellerSku = $sellerSku;
    }

    /**
     * @return mixed
     */
    public function getPriceValidUntil()
    {
        return $this->_priceValidUntil;
    }

    /**
     * @param mixed $priceValidUntil
     */
    public function setPriceValidUntil($priceValidUntil)
    {
        $this->_priceValidUntil = $priceValidUntil;
    }

    /**
     * @return mixed
     */
    public function getCommission()
    {
        return $this->_commission;
    }

    /**
     * @param mixed $commission
     */
    public function setCommission($commission)
    {
        $this->_commission = $commission;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->_tax;
    }

    /**
     * @param mixed $tax
     */
    public function setTax($tax)
    {
        $this->_tax = $tax;
    }

    /**
     * @return mixed
     */
    public function getPreSaleDate()
    {
        return $this->_preSaleDate;
    }

    /**
     * @param mixed $preSaleDate
     */
    public function setPreSaleDate($preSaleDate)
    {
        $this->_preSaleDate = $preSaleDate;
    }

    /**
     * @return mixed
     */
    public function getMeasurementUnit()
    {
        return $this->_measurementUnit;
    }

    /**
     * @param mixed $measurementUnit
     */
    public function setMeasurementUnit($measurementUnit)
    {
        $this->_measurementUnit = $measurementUnit;
    }

    /**
     * @return mixed
     */
    public function getUnitMultiplier()
    {
        return $this->_unitMultiplier;
    }

    /**
     * @param mixed $unitMultiplier
     */
    public function setUnitMultiplier($unitMultiplier)
    {
        $this->_unitMultiplier = $unitMultiplier;
    }

    /**
     * @return mixed
     */
    public function getSellingPrice()
    {
        return $this->_sellingPrice;
    }

    /**
     * @param mixed $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->_sellingPrice = $sellingPrice;
    }

    /**
     * @return mixed
     */
    public function getIsGift()
    {
        return $this->_isGift;
    }

    /**
     * @param mixed $isGift
     */
    public function setIsGift($isGift)
    {
        $this->_isGift = $isGift;
    }

    /**
     * @return mixed
     */
    public function getShippingPrice()
    {
        return $this->_shippingPrice;
    }

    /**
     * @param mixed $shippingPrice
     */
    public function setShippingPrice($shippingPrice)
    {
        $this->_shippingPrice = $shippingPrice;
    }

    /**
     * @return mixed
     */
    public function getRewardValue()
    {
        return $this->_rewardValue;
    }

    /**
     * @param mixed $rewardValue
     */
    public function setRewardValue($rewardValue)
    {
        $this->_rewardValue = $rewardValue;
    }

    /**
     * @return mixed
     */
    public function getFreightCommission()
    {
        return $this->_freightCommission;
    }

    /**
     * @param mixed $freightCommission
     */
    public function setFreightCommission($freightCommission)
    {
        $this->_freightCommission = $freightCommission;
    }

    /**
     * @return mixed
     */
    public function getPriceDefinitions()
    {
        return $this->_priceDefinitions;
    }

    /**
     * @param mixed $priceDefinitions
     */
    public function setPriceDefinitions($priceDefinitions)
    {
        $this->_priceDefinitions = $priceDefinitions;
    }

    /**
     * @return mixed
     */
    public function getTaxCode()
    {
        return $this->_taxCode;
    }

    /**
     * @param mixed $taxCode
     */
    public function setTaxCode($taxCode)
    {
        $this->_taxCode = $taxCode;
    }

    /**
     * @return mixed
     */
    public function getParentItemIndex()
    {
        return $this->_parentItemIndex;
    }

    /**
     * @param mixed $parentItemIndex
     */
    public function setParentItemIndex($parentItemIndex)
    {
        $this->_parentItemIndex = $parentItemIndex;
    }

    /**
     * @return mixed
     */
    public function getParentAssemblyBinding()
    {
        return $this->_parentAssemblyBinding;
    }

    /**
     * @param mixed $parentAssemblyBinding
     */
    public function setParentAssemblyBinding($parentAssemblyBinding)
    {
        $this->_parentAssemblyBinding = $parentAssemblyBinding;
    }
}
