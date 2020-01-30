<?php

namespace Occtoplus\VTEX;

use Occtoplus\VTEX\Factory\OrdersFactory;
use Occtoplus\VTEX\Repository\Order;

/**
 * Class Orders
 *
 * @category Library
 * @package  Occtoplus\VTEX
 * @author   Fábio Rodriguez <brajola@gmail.com>
 * @license  https://pt.wikipedia.org/wiki/GNU_General_Public_License GPL
 * @link     https://github.com/brajola/vtex
 *
 */
class Orders extends Order implements OrdersFactory
{
    /**
     * Orders constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param int $orderId
     *
     * @return mixed
     */
    public function getOrder($orderId)
    {
    }

    /**
     * @param string $orderBy
     * @param string $orderField
     * @param string $orderType
     *
     * @return mixed
     */
    public function listOrders($orderBy, $orderField, $orderType)
    {
    }

    /**
     * @param int $orderId
     * @param string $status
     *
     * @return mixed
     */
    public function startHandling($orderId, $status)
    {
    }

    /**
     * @param int $orderId
     * @param string $status
     *
     * @return mixed
     */
    public function cancelOrder($orderId, $status)
    {
    }

    /**
     * @param int $orderId
     * @param string $reason
     * @param string $discountValue
     * @param string $incrementValue
     * @param string $itemsRemoved
     * @param string $itemsAdded
     * @param string $id
     * @param string $price
     * @param string $quantity
     *
     * @return mixed
     */
    public function registerChange($orderId, $reason, $discountValue, $incrementValue, $itemsRemoved, $itemsAdded, $id, $price, $quantity)
    {
    }

    /**
     * @param int $orderId
     * @param string $source
     * @param string $message
     *
     * @return mixed
     */
    public function addLog($orderId, $source, $message)
    {
    }

    /**
     * @param int $orderId
     * @param string $attachmentName
     *
     * @return mixed
     */
    public function getAttachment($orderId, $attachmentName)
    {
    }
}
