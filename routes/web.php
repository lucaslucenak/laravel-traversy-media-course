<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello</h1>', 404)
    ->header('Content-Type', 'text/html')
    ->header('foo', 'bar');
});

Route::get('/post/{id}', function($id) {
    return response('There is your id' . $id, 200);
})->where('id', '[0-9]+'); // Regular expression that allow only numbers from 0 to 9

Route::get('/post-with-ddd/{id}', function($id) {
    ddd($id); // Debug
    return response('There is your id' . $id, 200);
})->where('id', '[0-9]+');

// Get params from URL
Route::get('/search', function(Request $request) {
    dd($request->name . ' ' . $request->city);
});

// Foreach example
Route::get('/listing', function(Request $request) {
    return view('listings', [
        'heading' => 'Foreach Example',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listing/{id}', function($id) {

    if (Listing::find($id)) {
        return view('listing', [
            'listing' => Listing::find($id)
        ]);
    }
    else {
        abort('404');
    }

});
