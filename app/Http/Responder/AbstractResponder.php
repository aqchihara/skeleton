<?php

namespace App\Http\Responder;

use Illuminate\Contracts\Routing\ResponseFactory;

abstract class AbstractResponder implements ResponderInterface
{
    /**
     * @var ResponseFactory
     */
    protected $response;

    /**
     * AbstractResponder constructor.
     *
     * @param ResponseFactory $response
     */
    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }
}
