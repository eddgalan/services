<?php

namespace App\Http\Controllers;

use App\Http\Response;

class HomeController
{

    public function index(): Response
    {
        return new Response('home');
    }
}
