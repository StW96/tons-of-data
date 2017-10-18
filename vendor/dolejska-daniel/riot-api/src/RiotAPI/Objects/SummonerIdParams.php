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

namespace RiotAPI\Objects;


/**
 *   Class SummonerIdParams
 *
 * Used in:
 *   tournament-stub (v3)
 *     @link https://developer.riotgames.com/api-methods/#tournament-stub-v3/POST_createTournamentCode
 *   tournament (v3)
 *     @link https://developer.riotgames.com/api-methods/#tournament-v3/POST_createTournamentCode
 *
 * @package RiotAPI\Objects
 */
class SummonerIdParams extends ApiObject
{
	/**
	 *   the tournament participants.
	 *
	 * @var int[] $participants
	 */
	public $participants;
}
