<?php 

namespace KimoSlim\Simplify\Exception;
/**
 * Represents a single error in a field of a request sent to the API.
 */
class FieldError {

    protected $field;
    protected $code;
    protected $message;

    /**
     * @ignore
     */
    function __construct($errorData) {
    
        $this->field = $errorData['field'];
        $this->code = $errorData['code'];
        $this->message = $errorData['message'];
    }

    /**
     * Returns the name of the field with the error.
     * @return string the field name.
     */
    function getFieldName() {
        return $this->field;
    }

    /**
     * Returns the code for the error.
     * @return string the error code.
     */
    function getErrorCode() {
        return $this->code;
    }

    /**
     * Returns a description of the error.
     * @return string description of the error.
     */
    function getMessage() {
        return $this->message;
    }


    function __toString() {
        return "Field error: " . $this->getFieldName() . "\"" . $this->getMessage() . "\" (" . $this->getErrorCode() . ")";
    }

}