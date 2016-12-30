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
    private $originalEmail;

    /**
     * Email after cleaning but before converting to a recommended one.
     *
     * @var String
     */
    protected $cleanEmail;

    private $orignalError;

    private $cleanError;

    /**
     * EmailChecker constructor.
     * @param String $originalEmail
     */
    public function __construct($originalEmail){
        $this->originalEmail = $originalEmail;
        $this->cleanEmail =  $this->cleanEmail($originalEmail);
    }

    private function cleanEmail($email)
    {
        $trimmed = trim($email);
        $lowerCase = strtolower($trimmed);
        return $lowerCase;
    }

    private function emailError($email)
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
        return $this->originalEmail;
    }

    /**
     * Returns Email after cleaning but before converting to a recommended one.
     *
     * @return String
     */
    public function getCleanEmail()
    {
        return $this->cleanEmail;
    }

    public function getOriginalError()
    {
        if (!isset($this->orignalError)){
            $this->orignalError = $this->emailError($this->getOriginalEmail());
        }
        return $this->orignalError;
    }

    public function getCleanError()
    {
        if (!isset($this->cleanError)){
            $this->cleanError = $this->emailError($this->getCleanEmail());
        }
        return $this->cleanError;
    }
}