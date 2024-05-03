<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genres;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    public function index(): View
    {
        $featured = Game::where('featured', '!=', '0')->orderBy('featured', 'DESC')->limit(5)->get();
        $games = Game::all();
        $genres = Genres::all();
    
        return view('games', compact('featured', 'games', 'genres'));
    }

    public function specificGame($game): View
    {
        $project = Game::find($game);
        $ext = substr($project->pictures->pageVid, -4);
        $extHead = substr($project->pictures->headerVid, -4);

        $gamesLike = Game::all()->where('genreID', $project->genreID)->take(4);

        return view('gamepage', compact('project', 'ext', 'extHead', 'gamesLike'));
    }

    public function searchAndFilter(Request $request)
    {
        $keyword = $request->input('keyword');
        $genre = $request->input('genre');
        
        $query = Game::query();
    
        if ($keyword !== null) {
            $query->where('title', 'like', "%$keyword%");
        }
    
        if ($genre !== null && $genre !== 'all') {
            $query->whereHas('genre', function($q) use ($genre) {
                $q->where('id', $genre);
            });
        }
    
        $games = $query->with('assets')->with('platforms')->with('platforms.platform')->paginate(5);
        
        $gamesHtml = view('includes.pagination', compact('games'))->render();
    
        return response()->json(['html' => $gamesHtml, 'data' => $games]);
    }

    public function searchSGD(Request $request)
    {
        $query = $request->input('query');

        $apiKey = 'ec6bebaed409fe293eace9c4490d3af2';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->withOptions(["verify"=>false])->get("https://www.steamgriddb.com/api/v2/search/autocomplete/{$query}");
    
        $results = $response->json()['data'];

        if (!empty($results)) {
            $firstResult = array_shift($results);

            $gameId = $firstResult['id'];

            $gridResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
            ])->withOptions(["verify" => false])->get("https://www.steamgriddb.com/api/v2/grids/game/{$gameId}?dimensions=600x900");

            $gridResults = array_slice($gridResponse->json()['data'], 0, 3);

            return response()->json($gridResults);
        } else {
            return response()->json([]);
        }

    }
    
}
