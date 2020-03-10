<?php

namespace App\Http\Controllers;

use App\Games ;
use App\reviews ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameDetailsController extends Controller
{

    public function index($id){


        $Games = Games::where('id', $id)->first();
        
        $reviews = reviews::where('Game_id', $id )->Paginate(5);

        $Raiting = reviews::where('Game_id', $id )->avg('Raiting');

        return view('pages.Game-Details' , compact('Games','Raiting') , ['reviews' => $reviews] );

    }
}
