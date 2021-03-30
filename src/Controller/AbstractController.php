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
        $this->response->setStatusCode(404);
        $this->response->setContent($message);

        return $this->response;
    }

    protected function redirect(string $url): Response
    {
        $this->response->setStatusCode(302);
        $this->response->headers->set('Location', $url);

        return $this->response;
    }
}