<?php

namespace freegle\DomainChecker;

require_once("CommonEmailProviders.php");
require_once("DamerauLevenshtein.php");
require_once("UrlTopLevel.php");

const UNKNOW = "unknown";

class DomainChecker
{
    private $original_domain;

    private $orininal_top_level;

    private $recommended_domain;

    private $all_recommendations;

    public function __construct($original_domain){
        $this->original_domain = $original_domain;
    }

    private function findTopLevel($domain)
    {
        $parts = explode(".", $domain);
        $count = count($parts);
        if (array_key_exists($parts[$count-1], \freegle\UrlTopLevel\DEFAULT_DOMAINS)){
            return \freegle\UrlTopLevel\DEFAULT_DOMAINS[$parts[$count-1]];
        }
        if ($parts[$count-1] == "uk"){
            if (array_key_exists($parts[$count-2], \freegle\UrlTopLevel\UK_SECOND_LEVEL)){
                return \freegle\UrlTopLevel\UK_SECOND_LEVEL[$parts[$count-2]];
            }
            return "UK Unexpected Second level";
        }
        if (array_key_exists($parts[$count-1], \freegle\UrlTopLevel\COUNTRY_CODES)){
            return \freegle\UrlTopLevel\COUNTRY_CODES[$parts[$count-1]];
        }
        return UNKNOW;
    }

    function recommendedDomain($domain, $tolerance)
    {
        $topLevel = $this->getOrignalTopLevel();
        switch ($topLevel) {
            case \freegle\UrlTopLevel\UK_COMMERCIAL:
                $recommended = $this->recommendedDomainFromList($domain, \freegle\CommonEmailProviders\CO_UK_DOMAINS, $tolerance);
                break;
            case \freegle\UrlTopLevel\COMMERCIAL:
                $recommended = $this->recommendedDomainFromList($domain, \freegle\CommonEmailProviders\COM_DOMAINS, $tolerance);
                break;
            case \freegle\UrlTopLevel\NETWORK:
                $recommended = $this->recommendedDomainFromList($domain, \freegle\CommonEmailProviders\NET_DOMAINS , $tolerance);
                break;
            case \freegle\UrlTopLevel\UK_ACADEMIC:
                $recommended = $this->acUkRecommendation($domain, $tolerance);
                break;
            case UNKNOW:
                #Bad toplevel so don't check just others
                $recommended = false;
                break;
            default:
                $recommended = $this->recommendedDomainFromList($domain, \freegle\CommonEmailProviders\OTHER_DOMAINS , $tolerance);
        }
        if ($recommended != false){
            return $recommended;
        }
        return $this->recommendedDomainFromList($domain, $this->allDomains(), $tolerance);

    }

    function acUkRecommendation($domain, $tolerance)
    {
        $parts = explode(".", $domain);
        $count = count($parts);
        if ($count == 3){
            return $this->recommendedDomainFromList($domain, \freegle\UrlTopLevel\AC_UK_THIRD, $tolerance);
        } elseif  ($count < 3) {
            //$domain is exactly ac.uk so match is impossible
            return false;
        } else {
            //Many uni have sub domains like  @cs.man.ac.uk
            //So check the last three biits and assume the first is correct
            $lastThree = $parts[$count-3] . "." . $parts[$count-2] . "." . $parts[$count-1];
            $recommended = $this->recommendedDomainFromList($lastThree, \freegle\UrlTopLevel\AC_UK_THIRD, $tolerance);
            //now add the first bits back in
            if ($recommended == $lastThree){
                $recommnded = $domain;
            } elseif ($recommended != false){
                for ($i = 0; $i < $count -3; $i++) {
                    echo $i . $parts[$i] . "<br>";
                    $recommended = $parts[$i] . "." .  $recommended;
                }
            }
            return $recommended;
        }
    }

    function recommendedDomainFromList($domain, $list, $tolerance)
    {
        if (in_array($domain , $list)){
            return $domain;
        }
        $bestFind = false;
        $bestValue = $tolerance + 1;
        foreach($list as $possible){
            $checker = new \Oefenweb\DamerauLevenshtein\DamerauLevenshtein($domain, $possible);
            $difference =  $checker->getSimilarity();
            if ($difference < $bestValue){
                $bestValue = $difference;
                $bestFind = $possible;
            }
        }
        return $bestFind;
    }

    function allDomains()
    {
        return array_merge(\freegle\CommonEmailProviders\CO_UK_DOMAINS,
                           \freegle\CommonEmailProviders\COM_DOMAINS,
                           \freegle\CommonEmailProviders\NET_DOMAINS,
                           \freegle\CommonEmailProviders\OTHER_DOMAINS,
                           \freegle\UrlTopLevel\AC_UK_THIRD);
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
    public function getRecommendedDomain()
    {
        if (!isset($this->recommended_domain)) {
            $this->recommended_domain = $this->recommendedDomain($this->getOriginalDomain(), 2);
        }
        return $this->recommended_domain;
    }

    /**
     * @return mixed
     */
    public function getAllRecommendations()
    {
        return $this->all_recommendations;
    }

}