<?php

use Illuminate\Support\Facades\Route;

function getUser(){
    return [
        1 => ['name' => 'Hashir Meraj', 'phone' => '03202262029', 'city' => 'Karachi'],
        2 => ['name' => 'Ali Ahmed', 'phone' => '03332223344', 'city' => 'Lahore'],
        3 => ['name' => 'Sara Khan', 'phone' => '03112234567', 'city' => 'Islamabad'],
        4 => ['name' => 'Ayesha Ali', 'phone' => '03001234567', 'city' => 'Peshawar']
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    $users = getUser();
    return view('home', ['users' => $users]);
});
Route::get('users/{id}', function ($id) {
    $users = getUser();
    $user = id
})->name('view.user');
