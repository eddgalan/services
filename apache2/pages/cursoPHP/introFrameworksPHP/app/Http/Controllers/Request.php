<?php

namespace App\Http\Controllers;

class Request
{
    protected $segments = [];
    protected $controller;
    protected $methods;

    public function __construct()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $uri = str_replace('cursoPHP/introFrameworksPHP/public/', '', $uri);

        $this->segments = explode('/', $uri);
        $this->setController();
        $this->setMethod();
    }

    /**
     * @return void
     */
    public function setController()
    {
        $this->controller = empty($this->segments[0]) ? 'home' : $this->segments[0];
    }

    /**
     * @return void
     */
    public function setMethod()
    {
        $this->methods = empty($this->segments[1]) ? 'index' : $this->segments[1];
    }

}
