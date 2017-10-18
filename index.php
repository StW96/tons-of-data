<?php
require __DIR__ . "/vendor/autoload.php";

use TonsOfDataAPI\TonsOfDataAPI;

$config = parse_ini_file(__DIR__."/../../config.ini", true);

$tod = new TonsOfDataAPI($config["riot-api"]["key"]);



?>
