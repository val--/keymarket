<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
	/**
	* Display all steam games in database
	*
	* @param  Request  $request
	* @return Response
	*/
	public function index(Request $request)
	{
	return view('games.all_games');
	}
}
