<?php
namespace AppBundle\Twig;

use DataDragonAPI\DataDragonAPI;

class DataDragonExtension extends \Twig_Extension {
	private $api;

	public function __construct() {
		$this->api = new DataDragonAPI();
		$this->api->initByCdn();
	}

	public function getFilters() {
		return array(
			new \Twig_SimpleFilter("championIcon", array($this, "championIcon")),
		);
	}

	public function championIcon($key) {
		return $this->api->getChampionIcon($key);
	}
}
