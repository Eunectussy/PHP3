<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProducts()
    {
        $listProducts = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.id', 'products.name', 'products.price', 'products.view', 'categories.name as catename', 'products.create_at', 'products.update_at')
        ->orderBy('view', 'desc')
        ->get();
        return view('products/listProducts')->with([
            'Product' =>$listProducts
        ]);

    }
    public function addProducts(){
        $categories = DB::table('categories')->select('id', 'name')->get();
        return view('products/addProducts')->with([
            'cate' => $categories
        ]);
    }
    public function addPostProducts(Request $req){
        $data = [
            'name' => $req->nameProduct,
            'price' => $req->priceProduct,
            'view' => $req->viewProduct,
            'category_id' => $req->categoryProduct,
            'create_at'    => Carbon::now(),
            'update_at'     => Carbon::now()
        ];
        DB::table('products')->insert($data);
        return redirect()->route('products.listproduct');
    }
    public function deleteProduct($idPro){
        DB::table('products')->where('id', $idPro)->delete();
        return redirect()->route('products.listproduct');
    }

    public function updateProduct($idPro){
        $product = DB::table('products')->where('id','=', $idPro)->first();
        $categories = DB::table('categories')->select('id', 'name')->get();
        return view('products/updateProducts')->with([
            'cate' => $categories,
            'pro' => $product
        ]);
    }
    public function updatePostProduct(Request $req){
        $data = [
            'name' => $req->nameProduct,
            'price' => $req->priceProduct,
            'view' => $req->viewProduct,
            'category_id' => $req->categoryProduct,
            'create_at'    => Carbon::now(),
            'update_at'     => Carbon::now()
        ];
        DB::table('products')->where('id', $req->idProduct)->update($data);
        return redirect()->route('products.listproduct');
    }
    public function searchProduct(Request $req){
        $name = $req->prodsearch;
        $listProduct = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->where('products.name', 'like', "%{$name}%")
        ->select('products.id', 'products.name', 'products.price', 'products.view', 'categories.name as catename', 'products.create_at', 'products.update_at')
        ->orderBy('view', 'desc')
        ->get();
        return view('products/listProducts')->with([
            'Product' =>$listProduct
        ]);

    }

    public function test(){
        return view('admin/products/list-product');
    }
}
