<?php

use App\Models\Product;
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

Route::get('/products', function (Request $request) {
    $products = Product::all();
    return $products;
});


Route::get('/products/xml', function (Request $request) {
    return response(file_get_contents(storage_path() . "/products.xml"), 200, [
        'Content-Type' => 'application/xml'
    ]);
});

