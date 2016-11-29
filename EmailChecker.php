<?php

namespace freegle\EmailChecker;

const AT_COUNT_END = " times";
const AT_COUNT_START = "@ symbol found ";
const END_WHITE_SPACE = "Whitespace found at end of email";
const NO_AT = "No @ symbol found.";
const NO_DOT_IN_DOMAIN = "No . found after @";
const OTHER_ERROR = "Unexpected email format";
const START_WHITE_SPACE = "Whitespace found at begining of email";
const UNKNOW = "unknown";

class EmailChecker
{
    /**
     * Email as original supplied.
     *
     * @var String
     */
    private $original_email;

    /**
     * Email after cleaning but before converting to a recommended one.
     *
     * @var String
     */
    private $clean_email;

    private $orignal_error;

    private $clean_error;

    /**
     * EmailChecker constructor.
     * @param String $original_email
     */
    public function __construct($original_email){
        $this->original_email = $original_email;
        $this->clean_email =  $this->cleanEmail($original_email);
    }

    private function cleanEmail($email)
    {
        $trimmed = trim($email);
        $lower_case = strtolower($trimmed);
        return $lower_case;
    }

    function email_error($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $count = substr_count($email, "@");
            switch ($count) {
                case "0":
                    return NO_AT;
                case "1":
                    $parts = explode("@", $email);
                    if (substr_count($parts[1], ".") == 0) {
                        return NO_DOT_IN_DOMAIN;
                    } elseif (preg_match('/\s/',$email[0])) {
                        return START_WHITE_SPACE;
                    } elseif (preg_match('/\s/',substr($email, -1))) {
                        return END_WHITE_SPACE;
                    } else {
                        return OTHER_ERROR;
                    }
                default:
                    return AT_COUNT_START  . substr_count($email, "@") . AT_COUNT_END;
            }
        } else {
            return false;
        }
    }
    /**
     * Returns the email as originally supplied
     *
     * @return String
     */
    public function getOriginalEmail()
    {
        return $this->original_email;
    }

    /**
     * Returns Email after cleaning but before converting to a recommended one.
     *
     * @return String
     */
    public function getCleanEmail()
    {
        return $this->clean_email;
    }

    public function getOriginalError()
    {
        if (!isset($this->orignal_error)){
            $this->orignal_error = $this->email_error($this->getOriginalEmail());
        }
        return $this->orignal_error;
    }

    public function getCleanError()
    {
        if (!isset($this->clean_error)){
            $this->clean_error = $this->email_error($this->getCleanEmail());
        }
        return $this->clean_error;
    }
}