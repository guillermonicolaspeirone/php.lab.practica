<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameDetailsController extends Controller
{

    public function index($id){


        $Games =  DB::table('Games')
        ->where('id', $id ) ->first() ;

        return view('pages.Game-Details' , compact('Games'));

       
    }

}
