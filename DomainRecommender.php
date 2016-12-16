<?php

namespace freegle\DomainRecommender;

require_once("CommonDomains.php");
require_once("DamerauLevenshtein.php");
require_once("DomainChecker.php");
require_once("VeryCommonDomains.php");

class DomainRecommender extends \freegle\DomainChecker\DomainChecker
{
    private $recommended_domain;

    private $all_recommendations;

    function recommendedDomain($domain, $tolerance)
    {
        $topLevel = $this->getOrignalTopLevel();
        switch ($topLevel) {
            case "ac.uk":
                $list = \freegle\CommonDomains\DOMAINS[$topLevel];
                $recommended = $this->recommendedDomainFromList($domain, $list, $tolerance);
                if ($recommended != false){
                    return $recommended;
                }
                $recommended = $this->acUkRecommendation($domain, $tolerance);
                break;
            case \freegle\DomainChecker\UNKNOW:
                break;
            default:
                if (array_key_exists ($topLevel , \freegle\CommonDomains\DOMAINS )) {
                    $list = \freegle\CommonDomains\DOMAINS[$topLevel];
                    $recommended = $this->recommendedDomainFromList($domain, $list, $tolerance);
                } else {
                    #Bad toplevel so don't check just check very common
                    $recommended = false;
                }
        }
        if ($recommended != false){
            return $recommended;
        }
        $list = \freegle\VeryCommonDomains\DOMAINS;
        return $this->recommendedDomainFromList($domain, $list, $tolerance);

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