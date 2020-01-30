<?php
use Brajola\VTEX\VTEXClient;

require_once "vendor/autoload.php";

$class = new VTEXClient();

echo $class->echoPhrase("It's working");
