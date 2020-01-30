<?php
use Occtoplus\VTEX\Orders;

require_once "vendor/autoload.php";

$class = new Orders();

$data = $class->listOrders();
