<?php 

namespace KimoSlim\Simplify\Exception;
use KimoSlim\Simplify\Exception\ApiException;

/**
 * Exception raised when the API request contains errors.
 */
class BadRequestException extends ApiException {

    protected $fieldErrors;

    /**
     * @ignore
     */
    function __construct($message, $status = null, $errorData = null) {
        parent::__construct($message, $status, $errorData);

        $fieldErrors = array();

        if ($errorData != null) {
            $error = $errorData['error'];
            if ($error != null) {
                $fieldErrors = $error['fieldErrors'];
                if ($fieldErrors != null) {
                    $this->fieldErrors = array();                
                    foreach ($fieldErrors as $fieldError) {
                        array_push($this->fieldErrors, new FieldError($fieldError));
                    }
                }
            }
        }
    }

    /**
     * Returns a boolean indicating whether there are any field errors.
     * @return boolean true if there are field errors; false otherwise.
     */
    function hasFieldErrors() {
        return count($this->fieldErrors) > 0;
    }

    /**
     * Returns a list containing all field errors.
     * @return array list of field errors.
     */
    function getFieldErrors() {
        return $this->fieldErrors;
    }

    /**
     * Returns a description of the error.
     * @return string description of the error.
     */
    function describe() {
        $s = parent::describe();
        foreach ($this->getFieldErrors() as $fieldError) {
            $s = $s . "\n" . (string) $fieldError;
        }
        return $s . "\n";
    }

}