<?php

namespace App\Http\Controllers;

use App\productos ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('Busqueda')) {
            $busq = $request->Busqueda;
            $productos =  productos::where('id','LIKE','%'.$busq.'%' )
                                    ->orWhere('Type','LIKE','%'.$busq.'%' )
                                    ->orWhere('ProductName','LIKE','%'.$busq.'%' )
                                    ->orWhere('ProductBrand','LIKE','%'.$busq.'%' )
                                    ->orWhere('Value','LIKE','%'.$busq.'%' )
                                    ->orWhere('Stock','LIKE','%'.$busq.'%' )
                                    ->Paginate(10)
                                    ->appends('Busqueda', request('Busqueda')) ;
        }else {
            $productos = productos::Paginate(10);
        }
        return view('pages.Products' , ['productos' => $productos] );
    }

    public function ProductAddView(){
        return view('pages.Product-Add');
    }
    
    public function ProductUpdateView($id){
        $Product = productos::where('id', $id)->first();
        return view('pages.Product-Update' , compact('Product') ,);
    }

    public function store(Request $request){

        $productos = productos::create($request->all());

        return response()->json($productos, 201);

    }

    public function update(Request $request, productos $productos){

       // $productos->update($request->all());

        return response()->json($productos, 200);

    }

    public function delete(Article $article){

        $productos->delete();

        return response()->json(null, 204);
    }









}
