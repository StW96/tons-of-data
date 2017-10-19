<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use RiotAPI\RiotAPI;
use RiotAPI\Definitions\Region;

class MainController extends Controller {
	private $config;
	private $api;

	public function __construct() {
		$this->config = parse_ini_file(__DIR__."/../../../../../config.ini", true);

		$this->api = new RiotAPI([
			RiotAPI::SET_KEY => $this->config["riot-api"]["key"],
			RiotAPI::SET_REGION => Region::EUROPE_WEST,
			RiotAPI::SET_CACHE_PROVIDER => RiotAPI::CACHE_PROVIDER_FILE,
			RiotAPI::SET_CACHE_CALLS => true,
			RiotAPI::SET_CACHE_CALLS_LENGTH => [
				RiotAPI::RESOURCE_STATICDATA => 86400,
				RiotAPI::RESOURCE_CHAMPION => 86400,
				RiotAPI::RESOURCE_MATCH => 86400,
				RiotAPI::RESOURCE_SPECTATOR => 86400,
				RiotAPI::RESOURCE_SUMMONER => 60
			]
		]);
	}
	/**
	  * @Route("/")
	  */
	public function startPage() {
		$champions = $this->api->getStaticChampions(null, null, null, "all")
					 ->data;

		usort($champions, function ($a, $b) {
			return $a->name <=> $b->name;
		});


		return $this->render("overview.twig", array(
			"champions" => $champions
		));
	}
}
