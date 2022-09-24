<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Import the autoload.php file which includes the SDK we installed
require dirname(__DIR__) . "/vendor/autoload.php";

Route::get('/', function () {

    // Create the ConfigCat client with your SDK key
    $client = new \ConfigCat\ConfigCatClient("Mp7aCBJQqEyNR9SOjqujjQ/_P8b1kQzQkms1GlwvBP-IA");

    // Create a variable to store the current state of the feature flag
    $canShowProductPrice = $client->getValue("product_price", false);

    // Pass the variable above as data to the index view
    return view('index', ['canShowProductPrice' => $canShowProductPrice]);
});
