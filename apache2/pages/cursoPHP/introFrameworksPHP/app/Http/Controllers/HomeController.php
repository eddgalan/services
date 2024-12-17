<?php

namespace App\Http\Controllers;

use App\Http\Response;

class HomeController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return view('home');
    }
}
