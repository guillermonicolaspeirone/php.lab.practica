<?php

namespace App\Http\Controllers;

use App\Games ;
use App\reviews ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $reviews = reviews::select('Game_id as Game_id',  DB::raw('avg(Raiting) as Raiting'))
                            ->groupBy('Game_id');

        $Games = Games::joinSub($reviews, 'reviews', function ($join) {
                            $join->on('Games.id', '=', 'reviews.Game_id');
                        })
                    ->orderBy('Raiting','desc')
                    ->limit(4)
                    ->get(); 
         
        return view('pages.home' , ['Games' => $Games] );
    }
}
