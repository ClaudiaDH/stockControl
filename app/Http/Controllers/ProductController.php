<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller{
    
    public function create(Request $request){
        
        //o metodo create fica responsavel por cadastrar o porduto.
        /*if($request->isMethod('GET')){
            return view('formulario');

        }else{

        }*/
        dd($request->nameProduct);
    }

    public function viewForm(Request $request){

        return view('products.form');
    }
}