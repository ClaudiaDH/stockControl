<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Auth;

class ProductController extends Controller{
    public $nome;
    public function create(Request $request){
        
        $newProduct = new Product();
        $newProduct->name = $request->nameProduct;
        $newProduct->description = $request->descriptionProduct;
        $newProduct->quantity = $request->quantityProduct;
        $newProduct->price = $request->priceProduct;
        $newProduct->description = $request->descriptionProduct;
        $newProduct->user_id = Auth::user()->id;

        $result = $newProduct->save();

        if($result){
            echo "Deu certo query!";

        }else{
            echo "Vai ter que criar hein!";
        }






        
        //o metodo create fica responsavel por cadastrar o porduto.
        /*if($request->isMethod('GET')){
            return view('formulario');

        }else{

        }*/
        //dd($request->nameProduct);
    }

    public function viewForm(Request $request){

        return view('products.form');
    }
}