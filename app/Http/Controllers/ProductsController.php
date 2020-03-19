<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\productos ;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

        $validatedData = $this->validate(request(), [
            
            'ProductName' => 'required|max:255',
            'ProductBrand' => 'required|max:255',
            'Value' => 'required|max:255',
            'Stock'  => 'required|max:255',
            'Type'  => 'required|max:255'

        ]);

        if ($validatedData == true) {

            $productos = productos::create($request->all());
            return response()->json($productos, 201);  
           
        }else{

            return  back()
                    ->withErrors()
                    ->withInput(request(['ProductName', 'ProductBrand' ,  'Value' , 'Stock' , 'Type' ]));
        }

    }

    public function update(Request $request, $id ){

        // $product = productos::where('id', $id)->first();

        // $product->update($request->all());

        // return response()->json($product, 200);

    }

    public function delete( $id ){

        // $product = productos::where('id', $id)->first();

        //$productos->delete();

        //return response()->json(null, 204);
    }









}
