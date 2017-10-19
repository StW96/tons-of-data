<?php
require __DIR__ . "/vendor/autoload.php";

use RiotAPI\RiotAPI;
use RiotAPI\Definitions\Region;

$config = parse_ini_file(__DIR__."/../../config.ini", true);

$api = new RiotAPI([
	RiotAPI::SET_KEY => $config["riot-api"]["key"],
	RiotAPI::SET_REGION => Region::EUROPE_WEST,
	RiotAPI::SET_CACHE_CALLS => true,
	RiotAPI::SET_CACHE_CALLS_LENGTH => [
		RiotAPI::RESOURCE_STATICDATA => 86400,
		RiotAPI::RESOURCE_CHAMPION => 86400,
		RiotAPI::RESOURCE_MATCH => 86400,
		RiotAPI::RESOURCE_SPECTATOR => 86400,
		RiotAPI::RESOURCE_SUMMONER => 60
	]
]);
