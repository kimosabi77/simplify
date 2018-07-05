<?php

namespace KimoSlim\Simplify\Exception;
use KimoSlim\Simplify\Exception\ApiException;

/**
 * Exception when a request was not allowed.
 */
class NotAllowedException extends ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}

