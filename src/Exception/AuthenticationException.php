<?php

namespace KimoSlim\Simplify\Exception;
use KimoSlim\Simplify\Exception\ApiException;
/**
 * Exception raised where there are problems authenticating a request.
 */
class AuthenticationException extends ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}