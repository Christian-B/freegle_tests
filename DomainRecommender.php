<?php

namespace freegle\DomainRecommender;

require_once("CommonDomains.php");
require_once("DamerauLevenshtein.php");
require_once("DomainChecker.php");
require_once("VeryCommonDomains.php");
require_once("TopLevelExtra.php");

const MAX_TOLERANCE = 3;

class DomainRecommender extends \freegle\DomainChecker\DomainChecker
{
    private $recommended_domain;

    private $all_recommendations;

    public function isKnown()
    {
        $topLevel = $this->getTopLevel();
        if (array_key_exists($topLevel, \freegle\CommonDomains\DOMAINS)) {
            $list = \freegle\CommonDomains\DOMAINS[$topLevel];
            if (in_array($this->getCleanDomain(), $list)) {
                return true;
            }
        }
    }

    function allRecommendedDomains($domain, $tolerance)
    {
        $topLevel = $this->getTopLevel();
        if (array_key_exists ($topLevel , \freegle\CommonDomains\DOMAINS )) {
            $list = \freegle\CommonDomains\DOMAINS[$topLevel];
            $recommendations = $this->allFromList($domain, $list, $tolerance);
        } else {
            $recommendations = array();
        }
        if (array_key_exists ($topLevel , \freegle\TopLevelExtra\EXTRA_DEPTHS )) {
            $parts = explode(".", $domain);
            $count = count($parts);
            if ($count == \freegle\TopLevelExtra\EXTRA_DEPTHS[$topLevel]) {
                $list = \freegle\TopLevelExtra\DOMAINS[$topLevel];
                $newRecommendations = $this->allWithExtra($parts, $list, $tolerance);
                $recommendations = array_merge($recommendations, $newRecommendations);
            }
        }
        $list = \freegle\VeryCommonDomains\DOMAINS;
        $newRecommendations = $this->allFromList($domain, $list, $tolerance);
        $recommendations = array_merge($recommendations, $newRecommendations);
        $ukTopLevel =  $topLevel . ".uk";
        if (array_key_exists ($ukTopLevel , \freegle\CommonDomains\DOMAINS )) {
            $list = \freegle\CommonDomains\DOMAINS[$ukTopLevel];
            $newRecommendations = $this->allFromList($domain . ".uk", $list, $tolerance);
            foreach($newRecommendations as $newRecommend => $difference) {

                $recommendations[$newRecommend] = $difference + 1.5;
            }
        }
        return $recommendations;
    }

    function allWithExtra($parts, $list, $tolerance)
    {
        $partDomain = $parts[1];
        for ($i = 2; $i < count($parts); $i++) {
            $partDomain = $partDomain . "." . $parts[$i];
        }
        $partRecommends = $this->allFromList($partDomain, $list, $tolerance);
        $recommendations = array();
        foreach($partRecommends as $partRecommend => $difference) {
            $recommendations[$parts[0] . "." .  $partRecommend] = $difference;
        }
        return  $recommendations;
    }

    function allFromList($domain, $list, $tolerance)
    {
        $recommendations = array();
        if (in_array($domain, $list)) {
            $recommendations[$domain] = 0;
        }
        foreach ($list as $possible) {
            $checker = new \Oefenweb\DamerauLevenshtein\DamerauLevenshtein($domain, $possible);
            $difference = $checker->getSimilarity();
            if ($difference <= $tolerance) {
                $recommendations[$possible] = $difference;
            }
        }
        return $recommendations;
    }

    /**
     * @return mixed
     */
    public function getRecommendedDomain()
    {
        if (!isset($this->recommended_domain)) {
            if ($this->isKnown()){
                $this->recommended_domain = $this->getCleanDomain();
            } else {
                $min_difference = PHP_INT_MAX;
                $this->recommended_domain = false; #false if none found
                foreach($this->getAllRecommendations() as $recommendation => $difference){
                     if ($difference < $min_difference){
                        $this->recommended_domain = $recommendation;
                        $min_difference = $difference;
                    }
                }
            }
        }
        return $this->recommended_domain;
    }

    /**
     * @return mixed
     */
    public function getAllRecommendations()
    {
        if (!isset($this->all_recommendations)) {
            $this->all_recommendations = $this->allRecommendedDomains($this->getCleanDomain(), MAX_TOLERANCE);
        }
        return $this->all_recommendations;
    }

}