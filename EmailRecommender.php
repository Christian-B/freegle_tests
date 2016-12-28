<?php

namespace freegle\EmailRecommender;

require_once("DomainRecommender.php");
require_once("EmailChecker.php");

class EmailRecommender extends \freegle\EmailChecker\EmailChecker
{
    private $recommendedEmail;

    private $allRecommendations;

    private $domainRecommendor;

    private $localPart;

    public function __construct($original_email){
        parent::__construct($original_email);
        $parts = explode("@", $this-> getCleanEmail());
        if (count($parts) == 2){
            $this->domainRecommendor = new \freegle\DomainRecommender\DomainRecommender($parts[1]);
            $this->localPart = $parts[0];
         } else {
            $this->domainRecommendor = false;
            $this->localPart = false;
        }
     }

    public function isKnown()
    {
        if ($this->domainRecommendor == false){
            return false;
        }
        return  $this->domainRecommendor->isKnown();
    }

    public function getRecommendedEmail()
    {
        if (!isset($this->recommendedEmail)) {
            if ($this->domainRecommendor == false){
                $this->recommendedEmail = false;
            } elseif ($this->isKnown()){
                $this->recommendedEmail = $this->getCleanEmail();
            } else {
                $recommendedDomain = $this->domainRecommendor->getRecommendedDomain();
                if ($recommendedDomain == false) {
                    $this->recommendedEmail = false;
                } else {
                    $this->recommendedEmail = $this->localPart . "@" . $recommendedDomain;
                }
            }
        }
        return $this->recommendedEmail;
    }
}