<?php 
namespace KimoSlim\Simplify\Exception;
use KimoSlim\Simplify\Exception\ApiException;
/**
 * Exception raised when there are communication problems contacting the API.
 */
class ApiConnectionException extends ApiException {

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);
    }
}
