<?php

$products = App\Product::all();
$products = App\Product::count();

$products = App\Product::latest('updated');
$products = App\Product::take(2)->get();
$products = App\Product::take(2)->latest()->get();
$products = App\Product::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
               
$product = App\Product::find(1);
$product = App\Product::findOrFail(1);
$product = App\Product::where('active', 1)->first();
$product = App\Product::where('price', '>', 100)->firstOrFail();

