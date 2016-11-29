<?php

namespace freegle\DomainChecker;

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