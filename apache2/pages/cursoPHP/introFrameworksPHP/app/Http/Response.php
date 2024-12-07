<?php

namespace App\Http;

class Response
{
    /**
     * @var string
     */
    protected string $view;

    public function __construct(string $view)
    {
        $this->view = $view;
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }

    /**
     * @return void
     */
    public function send(): void
    {
        $view = $this->getView();

        $content = file_get_contents(__DIR__ . "/../../views/$view");

        require __DIR__ . "/../../views/layout.php";
    }
}

