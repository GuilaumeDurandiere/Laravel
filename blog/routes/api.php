<?php

use Illuminate\Http\Request;

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
Route::get('/todoAll', 'TodoController@show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todos', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Todo::all();
});
 
Route::get('todos/{id}', function($id) {
    return Todo::find($id);
});

Route::post('todos', function(Request $request) {
    return Todo::create($request->all);
});

Route::put('todos/{id}', function(Request $request, $id) {
    $todo = Todo::findOrFail($id);
    $todo->update($request->all());

    return $todo;
});

Route::delete('todos/{id}', function($id) {
    Todo::find($id)->delete();

    return 204;
});
