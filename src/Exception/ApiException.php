<?php
namespace KimoSlim\Simplify\Exception;
/**
 *
 * Base class for all API exceptions.
 *
 */
class ApiException extends \Exception
{

    protected $errorData;
    protected $status;
    protected $errorCode;
    protected $reference;

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message);

        $this->status = $status;
        $this->errorCode = null;
        $this->reference = null;

        if ($errorData != null) {
            
            $this->reference = $errorData['reference'];
            $this->errorData = $errorData;

            $error = $errorData['error'];            
            if ($error != null) {
    
                $m = $error['message'];
                if ($m != null) {
                    $this->message = $m;
                }

                $this->errorCode = $error['code'];
            }
        }
    }
    
    /**
     * Returns a map of all error data returned by the API.
     * @return array a map containing API error data.
     */
    function getErrorData() {
        return $this->errorData;
    }

    /**
     * Returns the HTTP status for the request.
     * @return string HTTP status code (or null if there is no status).
     */
    function getStatus() {
        return $this->status;
    }
    
    /**
     * Returns unique reference for the API error.
     * @return string a reference (or null if there is no reference).
     */
    function getReference() {
        return $this->reference;
    }

    /**
     * Returns an code for the API error.
     * @return string the error code.
     */
    function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * Returns a description of the error.
     * @return string Description of the error.
     */
    function describe() {
        return get_class($this) . ": \"" 
            . $this->getMessage() . "\" (status: "
            . $this->getStatus() . ", error code: "
            . $this->getErrorCode() . ", reference: "
            . $this->getReference() . ")";
    }

}
