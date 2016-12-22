<?php

namespace freegle\DomainRecommender;

require_once("CommonDomains.php");
require_once("DamerauLevenshtein.php");
require_once("DomainChecker.php");
require_once("VeryCommonDomains.php");
require_once("TopLevelExtra.php");

class DomainRecommender extends \freegle\DomainChecker\DomainChecker
{
    private $recommended_domain;

    private $all_recommendations;

    function recommendedDomain($domain, $tolerance)
    {
        $topLevel = $this->getOrignalTopLevel();
        if (array_key_exists ($topLevel , \freegle\CommonDomains\DOMAINS )) {
            $list = \freegle\CommonDomains\DOMAINS[$topLevel];
            $recommended = $this->recommendedDomainFromList($domain, $list, $tolerance);
            if ($recommended != false) {
                return $recommended;
            }
        }
        if (array_key_exists ($topLevel , \freegle\TopLevelExtra\EXTRA_DEPTHS )) {
            $parts = explode(".", $domain);
            $count = count($parts);
            if ($count == \freegle\TopLevelExtra\EXTRA_DEPTHS[$topLevel]) {
                $list = \freegle\TopLevelExtra\DOMAINS[$topLevel];
                $recommended = $this->recommendWithExtra($parts, $list, $tolerance);
                if ($recommended != false){
                    return $recommended;
                }
            }
        }
        $list = \freegle\VeryCommonDomains\DOMAINS;
        return $this->recommendedDomainFromList($domain, $list, $tolerance);
    }

    function recommendWithExtra($parts, $list, $tolerance)
    {
        $partDomain = $parts[1];
        for ($i = 2; $i < count($parts); $i++) {
            $partDomain = $partDomain . "." . $parts[$i];
        }
        $partRecommend = $this->recommendedDomainFromList($partDomain, $list, $tolerance);
        if ($partRecommend == false){
            return false;
        } else {
            return $parts[0] . "." .  $partRecommend;
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