<?php

namespace App\Http\Controllers;

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

        $Games = DB::table('Games')
                    ->join('reviews', 'Games.id', '=', 'reviews.Game_id')
                    ->select('Game_id as id',  DB::raw('avg(Raiting) as Raiting'))
                    ->groupBy('Game_id')
                    ->orderBy('Raiting','desc')
                    ->limit(4)
                    ->get(); 


        return view('pages.home' , ['Games' => $Games] );
    }


}
