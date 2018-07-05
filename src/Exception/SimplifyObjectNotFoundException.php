<?php

namespace KimoSlim\Simplify\Exception;
use KimoSlim\Simplify\Exception\ApiException;
/**
 * Exception when a requested SimplifyObject cannot be found.
 */
class SimplifyObjectNotFoundException extends ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}

