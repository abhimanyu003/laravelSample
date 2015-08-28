<?php


Route::get('/', function () {
    $user = App\User::first();
    return view('child', compact('user'));
});