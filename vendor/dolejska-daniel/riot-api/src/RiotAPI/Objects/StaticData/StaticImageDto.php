<?php

/**
 * Copyright (C) 2016-2017  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\Objects\StaticData;

use RiotAPI\Objects\ApiObject;


/**
 *   Class StaticImageDto
 * This object contains image data.
 *
 * Used in:
 *   lol-static-data (v3)
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getChampionList
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getChampionById
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getItemList
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getItemById
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getMapData
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getMasteryList
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getMasteryById
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getProfileIcons
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getRuneList
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getRuneById
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getSummonerSpellList
 *     @link https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getSummonerSpellById
 *
 * @package RiotAPI\Objects\StaticData
 */
class StaticImageDto extends ApiObject
{
	/** @var string $full */
	public $full;

	/** @var string $group */
	public $group;

	/** @var string $sprite */
	public $sprite;

	/** @var int $h */
	public $h;

	/** @var int $w */
	public $w;

	/** @var int $y */
	public $y;

	/** @var int $x */
	public $x;
}
