<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GameController extends Controller
{

	 /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	* Display all steam games in database
	*
	* @param  Request  $request
	* @return Response
	*/
	public function index(Request $request)
	{
	$games = Game::take(10)->get();
	return view('games.all_games',[
            'games' => $games,
        ]);
	}

	public function updateGamesDatabase(Request $request)
	{
		$liste_id_json = file_get_contents('http://api.steampowered.com/ISteamApps/GetAppList/v0001/');
		$liste_id = json_decode($liste_id_json);

		foreach($liste_id->applist as $steam){

			foreach($steam->app as $key=>$app){
				if(preg_match('#0$#', $app->appid)){

					if(!preg_match('#Demo|Trailer|Server|SDK|Soundtrack#', $app->name)){

						$id = $app->appid;
						// TODO : appeller fonction sur $id pour vérifier validité jeu & l'enregistrer si ok
						//echo($id.'<br>');

					}
				}

			}
		}
	}

	private function addGame($steam_appid){


	}
}
