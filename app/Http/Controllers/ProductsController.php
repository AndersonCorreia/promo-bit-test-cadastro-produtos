<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('product.products_list', [
            'products' => Product::all()
        ]);
    }

    public function getCreate(){
        return view('product.products_create', [
            'tags' => Tag::all()
        ]);
    }

    public function postCreate(Request $request){
        $data = $request->all();
        try{
            $product = new Product();
            $product->name = $data['name'];
            $product->save();
            if( isset($data['tags'])){
                $product->tags()->sync($data['tags']);
            }
        }
        catch(\Exception $e){
            return redirect()->route('products.create')->with('error', "Erro ao cadastrar produto (produto já cadastrado)");
        }

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {   
        return view('product.product_show', [
            'product' => $product,
            'tags' => $product->tags
        ]);
    }

    public function getEdit(Product $product)
    {
        return view('product.product_edit', [
            'product' => $product,
            'tags' => Tag::all()
        ]);
    }

    public function postEdit(Product $product)
    {
        $data = request()->all();
        $product->name = $data['name'];
        $product->save();
        if( isset($data['tags'])){
            $product->tags()->sync($data['tags']);
        }
        return redirect()->route('products.index');
    }

    public function getDestroy(Product $product)
    {
        return view('product.product_destroy', [
            'product' => $product,
            'tags' => Tag::all()
        ]);
    }

    public function deleteDestroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
