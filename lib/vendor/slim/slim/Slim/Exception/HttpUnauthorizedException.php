<?php

/**
 * Slim Framework (https://slimframework.com)
 *
 * @license https://github.com/slimphp/Slim/blob/4.x/LICENSE.md (MIT License)
 */



namespace Slim\Exception;

class HttpUnauthorizedException extends HttpSpecializedException
{
    protected $code = 401;
    protected $message = 'Unauthorized.';
    protected $title = '401 Unauthorized';
    protected $description = 'The request requires valid user authentication.';
}
