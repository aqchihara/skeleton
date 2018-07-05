<?php

namespace App\Http\Responder;

use Symfony\Component\HttpFoundation\Response;

interface ResponderInterface
{
    /**
     * @param mixed ...$args
     *
     * @return Response
     */
    public function handle(...$args): Response;
}
