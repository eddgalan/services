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

        $content = file_get_contents(viewPath($view));

        require viewPath('layout');
    }
}

