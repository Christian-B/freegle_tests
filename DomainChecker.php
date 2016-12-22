<?php

namespace freegle\DomainChecker;

require_once("UrlTopLevel.php");

const UNKNOW = "unknown"; #keep as one word for scripts

class DomainChecker
{
    private $original_domain;

    private $orininal_top_level;

    public function __construct($original_domain){
        $this->original_domain = $original_domain;
    }

    private function findTopLevel($domain)
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

    private function findTopLevelName($domain)
    {
        $parts = explode(".", $domain);
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
    public function getOrignalTopLevel()
    {
        if (!isset($this->orininal_top_level)){
            $this->orininal_top_level = $this->findTopLevel($this->getOriginalDomain());
        }
        return $this->orininal_top_level;
    }

    /**
     * @return mixed
     */
    public function getOrignalTopLevelName()
    {
        return $this->findTopLevelName($this->getOriginalDomain());
    }

}