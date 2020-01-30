<?php

namespace Occtoplus\VTEX\Repository;

use Occtoplus\VTEX\Repository\Order\Item;
use Occtoplus\VTEX\Repository\Order\Total;

/**
 * Class Order
 *
 * @category Library
 * @package  Occtoplus\VTEX
 * @author   Fábio Rodriguez <brajola@gmail.com>
 * @license  https://pt.wikipedia.org/wiki/GNU_General_Public_License GPL
 * @link     https://github.com/brajola/vtex
 *
 */
class Order
{
    protected $_emailTracked;
    protected $_approvedBy;
    protected $_cancelledBy;
    protected $_cancelReason;
    protected $_orderId;
    protected $_sequence;
    protected $_marketplaceOrderId;
    protected $_marketplaceServicesEndpoint;
    protected $_sellerOrderId;
    protected $_origin;
    protected $_affiliateId;
    protected $_salesChannel;
    protected $_merchantName;
    protected $_status;
    protected $_statusDescription;
    protected $_value;
    protected $_creationDate;
    protected $_lastChange;
    protected $_orderGroup;

    /**
     * Order constructor.
     * @param Item $_item
     * @param Total $_total
     */
    function __construct(
        Item $_item,
        Total $_total
    )
    {
        $data = [];

        $this->setData($data);
    }

    /**
     * @param array $data
     */
    private function setData($data)
    {
        $this->setEmailTracked($data);
        $this->setApprovedBy($data);
        $this->setCancelledBy($data);
        $this->setCancelReason($data);
        $this->setOrderId($data);
        $this->setSequence($data);
        $this->setMarketplaceOrderId($data);
        $this->setMarketplaceServicesEndpoint($data);
        $this->setSellerOrderId($data);
        $this->setOrigin($data);
        $this->setAffiliateId($data);
        $this->setSalesChannel($data);
        $this->setMerchantName($data);
        $this->setStatus($data);
        $this->setStatusDescription($data);
        $this->setValue($data);
        $this->setCreationDate($data);
        $this->setLastChange($data);
        $this->setOrderGroup($data);
    }

    /**
     * @return mixed
     */
    public function getEmailTracked()
    {
        return $this->_emailTracked;
    }

    /**
     * @param mixed $emailTracked
     */
    public function setEmailTracked($emailTracked)
    {
        $this->_emailTracked = $emailTracked;
    }

    /**
     * @return mixed
     */
    public function getApprovedBy()
    {
        return $this->_approvedBy;
    }

    /**
     * @param mixed $approvedBy
     */
    public function setApprovedBy($approvedBy)
    {
        $this->_approvedBy = $approvedBy;
    }

    /**
     * @return mixed
     */
    public function getCancelledBy()
    {
        return $this->_cancelledBy;
    }

    /**
     * @param mixed $cancelledBy
     */
    public function setCancelledBy($cancelledBy)
    {
        $this->_cancelledBy = $cancelledBy;
    }

    /**
     * @return mixed
     */
    public function getCancelReason()
    {
        return $this->_cancelReason;
    }

    /**
     * @param mixed $cancelReason
     */
    public function setCancelReason($cancelReason)
    {
        $this->_cancelReason = $cancelReason;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->_orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->_orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getSequence()
    {
        return $this->_sequence;
    }

    /**
     * @param mixed $sequence
     */
    public function setSequence($sequence)
    {
        $this->_sequence = $sequence;
    }

    /**
     * @return mixed
     */
    public function getMarketplaceOrderId()
    {
        return $this->_marketplaceOrderId;
    }

    /**
     * @param mixed $marketplaceOrderId
     */
    public function setMarketplaceOrderId($marketplaceOrderId)
    {
        $this->_marketplaceOrderId = $marketplaceOrderId;
    }

    /**
     * @return mixed
     */
    public function getMarketplaceServicesEndpoint()
    {
        return $this->_marketplaceServicesEndpoint;
    }

    /**
     * @param mixed $marketplaceServicesEndpoint
     */
    public function setMarketplaceServicesEndpoint($marketplaceServicesEndpoint)
    {
        $this->_marketplaceServicesEndpoint = $marketplaceServicesEndpoint;
    }

    /**
     * @return mixed
     */
    public function getSellerOrderId()
    {
        return $this->_sellerOrderId;
    }

    /**
     * @param mixed $sellerOrderId
     */
    public function setSellerOrderId($sellerOrderId)
    {
        $this->_sellerOrderId = $sellerOrderId;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->_origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin)
    {
        $this->_origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getAffiliateId()
    {
        return $this->_affiliateId;
    }

    /**
     * @param mixed $affiliateId
     */
    public function setAffiliateId($affiliateId)
    {
        $this->_affiliateId = $affiliateId;
    }

    /**
     * @return mixed
     */
    public function getSalesChannel()
    {
        return $this->_salesChannel;
    }

    /**
     * @param mixed $salesChannel
     */
    public function setSalesChannel($salesChannel)
    {
        $this->_salesChannel = $salesChannel;
    }

    /**
     * @return mixed
     */
    public function getMerchantName()
    {
        return $this->_merchantName;
    }

    /**
     * @param mixed $merchantName
     */
    public function setMerchantName($merchantName)
    {
        $this->_merchantName = $merchantName;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->_status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatusDescription()
    {
        return $this->_statusDescription;
    }

    /**
     * @param mixed $statusDescription
     */
    public function setStatusDescription($statusDescription)
    {
        $this->_statusDescription = $statusDescription;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->_value = $value;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->_creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->_creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getLastChange()
    {
        return $this->_lastChange;
    }

    /**
     * @param mixed $lastChange
     */
    public function setLastChange($lastChange)
    {
        $this->_lastChange = $lastChange;
    }

    /**
     * @return mixed
     */
    public function getOrderGroup()
    {
        return $this->_orderGroup;
    }

    /**
     * @param mixed $orderGroup
     */
    public function setOrderGroup($orderGroup)
    {
        $this->_orderGroup = $orderGroup;
    }
}
