<?php

namespace freegle\DomainChecker;

require_once("UrlTopLevel.php");

const UNKNOW = "unknown"; #keep as one word for scripts

class DomainChecker
{
    protected $original_domain;

    protected $lowerCaseDoamin;

     public function __construct($original_domain){
        $this->original_domain = $original_domain;
        $this->lowerCaseDoamin = strtolower($original_domain);
        $this->top_level = $this->findTopLevel($this->lowerCaseDoamin);
    }

    protected function findTopLevel($domain)
    {
        $parts = explode(".", $domain);
        $count = count($parts);
        switch ($parts[$count-1]){
            case "uk":
                return $parts[$count-2] . "." . $parts[$count-1];
            case "in":
                switch ($parts[$count-2]) {
                    case "co":
                        return "co.in";
                    case "gov":
                        return "net.in";
                    case "net":
                        return "net.in";
                }
            case "pl":
                switch ($parts[$count-2]) {
                    case "com":
                        return "com.pl";
                    case "edu":
                        return "edu.pl";
                    case "net":
                        return "net.pl";
                }
        }
        return $parts[$count-1];
    }

    /**
    * @return mixed
    */
    public function getOriginalDomain()
    {
       return $this->original_domain;
    }

    /**
     * @return mixed
     */
    public function getTopLevel()
    {
        return $this->top_level;
    }

    /**
     * @return mixed
     */
    public function getTopLevelName()
    {
        $parts = explode(".", $this->lowerCaseDoamin);
        $count = count($parts);
        if (array_key_exists($parts[$count-1], \freegle\UrlTopLevel\DEFAULT_DOMAINS)){
            return \freegle\UrlTopLevel\DEFAULT_DOMAINS[$parts[$count-1]];
        }
        if ($parts[$count-1] == "uk"){
            $top_level = $parts[$count-2] . "." . $parts[$count-1];
            if (array_key_exists($top_level, \freegle\UrlTopLevel\UK_SECOND_LEVEL)){
                return \freegle\UrlTopLevel\UK_SECOND_LEVEL[$top_level];
            }
            return UNKNOW;
        }
        if (array_key_exists($parts[$count-1], \freegle\UrlTopLevel\COUNTRY_CODES)){
            return \freegle\UrlTopLevel\COUNTRY_CODES[$parts[$count-1]];
        }
        return UNKNOW;
    }

}