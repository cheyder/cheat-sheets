<?php

Route::get('foo', function () {
    // basic
    return 'Hello World';
    
    // json
    return ['foo' => 'bar'];
    return response()->json(['foo' => 'bar']);
    
    // custom
    return response('Hello World', 200)
               ->header('Content-Type', 'text/plain');
               
    // templates and parameters
    $name = request('name');
    return view('hello', ['name' => $name]);
    
    // redirect
    return redirect('/there');
    
    // errors
    abort(404, 'Site not found');
});

// required parameters
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

