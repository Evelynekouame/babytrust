<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function index()
{
    $user = Auth::user();
    return view('home', ['user' => $user]);
}
}
