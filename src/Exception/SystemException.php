<?php

namespace KimoSlim\Simplify\Exception;
use KimoSlim\Simplify\Exception\ApiException;
/**
 * Exception when there was a system error processing a request.
 */
class SystemException extends ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}