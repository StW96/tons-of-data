<?php
namespace TonsOfDataAPI;

use RiotAPI\RiotAPI;
use RiotAPI\Definitions\Region;

class TonsOfDataAPI {
	protected $key;
	protected $api;

	protected $beginTime;

	public function __construct($key) {
		$this->key = $key;

		$this->api = new RiotAPI([
			RiotAPI::SET_KEY => $key,
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

		$this->beginTime = floor(round(
			(microtime(true) - 1209600) * 1000) / 86400) * 86400;

	}
}
