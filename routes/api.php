<?php

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products',function(){
    return Product::all();
});

Route::post('/products',function(){
    return Product::create([
        'name'=>'Product one',
        'slug'=>'product-one',
        'description'=>"this is product one",
        'price'=>'99.99'
    ]);
});

Route::get('/',function(){
    return ['method'=>'GET','url'=>'http://localhost:8000/api/products','message'=>'Fetch all products'];
});
