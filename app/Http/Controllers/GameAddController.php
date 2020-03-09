<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Games;
use App\Models;
use Illuminate\Support\Facades\Validator;

use Illuminate\Validation\Rule;

class GameAddController extends Controller
{
    public function index(){

        return view('pages.Game-Add');

    }

    public function add(Request $request){

        $validatedData = $this->validate(request(), [
            
            'Genere' => 'required|max:255',
            'name' => 'required|max:255',
            'Developer' => 'required|max:255',
            'Status'  => 'required|max:255',
            'Value'  => 'required|max:255',
            'Contact_page'  => 'required|max:255',
            'img'  => 'required',
        ]);

        if ($validatedData == true) {
        
        Games::create([
            'Genere' => $request['Genere'],
            'Name' => $request['name'],
            'Developer'=> $request['Developer'],
            'Status' => $request['Status'],
            'Value' => $request['Value'],
            'Published_at' => $request['Published_at'],
            'Contact_page' => $request['Contact_page'],
            'img' => $request['img'],
        ]);
        }else {
            return back()
            ->withErrors()
            ->withInput(request(['name', 'Genere' ,  'Developer' , 'Status' , 'Value' , 'Contact_page' , 'img'  ]));
        }

    }



}
