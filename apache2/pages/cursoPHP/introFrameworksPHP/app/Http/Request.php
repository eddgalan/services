<?php

namespace app\Http;

class Request
{
    protected array $segments = [];
    protected string $controller;
    protected string $method;

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
    public function setController(): void
    {
        $this->controller = empty($this->segments[0]) ? 'home' : $this->segments[0];
    }

    /**
     * @return void
     */
    public function setMethod(): void
    {
        $this->method = empty($this->segments[1]) ? 'index' : $this->segments[1];
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        $controller = ucfirst($this->controller);
        return "App\Http\Controllers\\{$controller}Controller";
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return void
     */
    public function send(): void
    {
        $controller = $this->getController();
        $method = $this->getMethod();

        $response = call_user_func([
            new $controller,
            $method
        ]);

        $response->send();
    }
}
