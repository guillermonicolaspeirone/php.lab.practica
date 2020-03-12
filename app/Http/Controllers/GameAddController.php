<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Games;
use App\Models;
use Illuminate\Support\Facades\Validator;

use App\Traits\UploadTrait;

use Illuminate\Validation\Rule;

use Intervention\Image\ImageManagerStatic as Image;

class GameAddController extends Controller
{

    use UploadTrait;
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
            'img'  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validatedData == true) {
        
            $image      = $request->file('img');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->stream();

            Storage::disk('local')->put('public'.'/'. 'img'.'/'.$fileName, $img, 'public');
        
            $generos = "";
            foreach ($request['Genere'] as $gn ) {
                $generos = $generos.", ".$gn;
            }

            
        Games::create([
            'Genere' =>  $generos ,
            'Name' => $request['name'],
            'Developer'=> $request['Developer'],
            'Status' => $request['Status'],
            'Value' => $request['Value'],
            'Published_at' => $request['Published_at'],
            'Contact_page' => $request['Contact_page'],
            'img' => $fileName,

        ]);

            return redirect('home') ;

        }else {
            return back()
            ->withErrors()
            ->withInput(request(['name', 'Genere' ,  'Developer' , 'Status' , 'Value' , 'Contact_page' , 'img'  ]));
        }

    }



}
