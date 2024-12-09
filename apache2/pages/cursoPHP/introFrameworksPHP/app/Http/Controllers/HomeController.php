<?php

namespace App\Http\Controllers;

class HomeController
{

    public function index(): \App\Http\Response
    {
        return view('home');
    }
}
