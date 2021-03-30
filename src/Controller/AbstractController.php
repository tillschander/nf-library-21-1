<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
    protected Request $request;
    protected Response $response;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->response = new Response();
    }

    protected function render(string $view): Response
    {
        $template = file_get_contents(__DIR__ . "/../../templates/$view.html");
        $this->response->setContent($template);

        return $this->response;
    }

    protected function json(mixed $data): Response
    {
        // set content type header
        // encode data and set as content
        return $this->response;
    }

    protected function notFound(string $message): Response
    {
        // set 404 status code
        // set message as content
        return $this->response;
    }

    protected function redirect(string $url): Response
    {
        // set location header with url
        // 302 status code
        return $this->response;
    }
}