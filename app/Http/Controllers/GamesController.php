<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    
    public function index(Request $request)
    {

        $Games = DB::table('Games')->Paginate(12);
        return view('pages.Games' , ['Games' => $Games] );


    }



}
