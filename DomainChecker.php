<?php

namespace freegle\DomainChecker;

require_once("UrlTopLevel.php");

const UNKNOW = "unknown"; #keep as one word for scripts

class DomainChecker
{
    protected $originalDomain;

    protected $lowerCaseDoamin;

    public function __construct($originalDomain){
        $this->originalDomain = $originalDomain;
        $this->lowerCaseDoamin = strtolower($originalDomain);
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
       return $this->originalDomain;
    }

    /**
     * @return mixed
     */
    public function getTopLevel()
    {
        return $this->findTopLevel($this->lowerCaseDoamin);
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
            $topLevel = $parts[$count-2] . "." . $parts[$count-1];
            if (array_key_exists($topLevel, \freegle\UrlTopLevel\UK_SECOND_LEVEL)){
                return \freegle\UrlTopLevel\UK_SECOND_LEVEL[$topLevel];
            }
            return UNKNOW;
        }
        if (array_key_exists($parts[$count-1], \freegle\UrlTopLevel\COUNTRY_CODES)){
            return \freegle\UrlTopLevel\COUNTRY_CODES[$parts[$count-1]];
        }
        return UNKNOW;
    }

}