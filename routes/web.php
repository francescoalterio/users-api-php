<?php
include '../utils/User.php';
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use utils\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function (Request $request) {

    $response_length = $request->input('length') ?: 5;
    $users = [];
    for($i = 0; $i < $response_length;$i++) {
        $user = new User();
        array_push($users, $user);
    }

    return $users;
});