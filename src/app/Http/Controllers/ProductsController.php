<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $produtos = Product::paginate(15);
        return ProductResource::collection($produtos);
    }

    public function show($id){
        $produto = Product::findOrFail( $id );
        return new ProductResource( $produto );
    }

    public function store(Request $request){
        $produto = new Product();
        $produto->name = $request->input('name');
        $produto->description = $request->input('description');
        $produto->brand = $request->input('brand');
        $produto->category = $request->input('category');
        $produto->price = $request->input('price');
        $produto->color = $request->input('color');

        if( $produto->save() ){
            return new ProductResource( $produto );
        }
    }

    public function update(Request $request){
        $produto = Product::findOrFail( $request->id );
        $produto->titulo = $request->input('titulo');
        $produto->conteudo = $request->input('conteudo');

        if( $produto->save() ){
            return new ProductResource( $produto );
        }
    }

    public function destroy($id){
        $produto = Product::findOrFail( $id );
        if( $produto->delete() ){
            return new ProductResource( $produto );
        }

    }
}
