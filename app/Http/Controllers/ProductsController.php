<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('Busqueda')) {
            $busq = $request->Busqueda;
            $productos =  DB::table('productos')
                                    ->where('id','LIKE','%'.$busq.'%' )
                                    ->orWhere('Type','LIKE','%'.$busq.'%' )
                                    ->orWhere('ProductName','LIKE','%'.$busq.'%' )
                                    ->orWhere('ProductBrand','LIKE','%'.$busq.'%' )
                                    ->orWhere('Value','LIKE','%'.$busq.'%' )
                                    ->orWhere('Stock','LIKE','%'.$busq.'%' )
                                    ->Paginate(10)
                                    ->appends('Busqueda', request('Busqueda')) ;
        }else {
            $productos = DB::table('productos')->Paginate(10);
        }
        return view('pages.Products' , ['productos' => $productos] );
    }

}
