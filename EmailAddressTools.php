<?php
namespace freegle\EmailAddressTools;

require_once("DamerauLevenshtein.php");
require_once("EmailCleaner.php");
require_once("UrlTopLevel.php");

const NO_AT = "No @ symbol found.";
const NO_DOT_IN_DOMAIN = "No . found after @";
const START_WHITE_SPACE = "Whitespace found at begining of email";
const END_WHITE_SPACE = "Whitespace found at end of email";
const OTHER_ERROR = "Unexpected email format";

const UNKNOW = "unknown";

function email_error($email)
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
                return "@ symbol found " . substr_count($email, "@") . " times";
        }
    } else {
        return false;
    }
}


function emailTopLevel($email)
{
    $email =  \freegle\EmailCleaner\cleanEmail($email);
    $domain = substr($email, strrpos($email, '@') + 1);
    return getTopLevel($domain);
}

function getTopLevel($domain)
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


function recommenedEmail($email, $tolerance = 2)
{
    $email =  \freegle\EmailCleaner\cleanEmail($email);
    $parts = explode("@",$email);
    $recommended = recommendedDomain($parts[1], $tolerance);
    if ($recommended == false) {
        return false;
    }
    return $parts[0] . "@" . $recommended;
}

function recommendedDomain($domain, $tolerance)
{
    $topLevel = getTopLevel($domain);
    switch ($topLevel) {
        case \freegle\UrlTopLevel\UK_COMMERCIAL:
            $recommended = recommendedDomainFromList($domain, coUkDomains(), $tolerance);
            break;
        case \freegle\UrlTopLevel\COMMERCIAL:
            $recommended = recommendedDomainFromList($domain, comDomains(), $tolerance);
            break;
        case \freegle\UrlTopLevel\NETWORK:
            $recommended = recommendedDomainFromList($domain, netDomains(), $tolerance);
            break;
        case \freegle\UrlTopLevel\UK_ACADEMIC:
            $recommended = acUkRecommendation($domain, $tolerance);
            break;
        case UNKNOW:
            #Bad toplevel so don't check just others
            $recommended = false;
            break;
        default:
            $recommended = recommendedDomainFromList($domain, otherDomains(), $tolerance);
    }
    if ($recommended != false){
        return $recommended;
    }
    return recommendedDomainFromList($domain, allDomains(), $tolerance);

}

function acUkRecommendation($domain, $tolerance)
{
    $parts = explode(".", $domain);
    $count = count($parts);
    if ($count == 3){
        return recommendedDomainFromList($domain, \freegle\UrlTopLevel\AC_UK_THIRD, $tolerance);
    } elseif  ($count < 3) {
        //$domain is exactly ac.uk so match is impossible
        return false;
    } else {
        //Many uni have sub domains like  @cs.man.ac.uk
        //So check the last three biits and assume the first is correct
        $lastThree = $parts[$count-3] . "." . $parts[$count-2] . "." . $parts[$count-1];
        $recommended = recommendedDomainFromList($lastThree, \freegle\UrlTopLevel\AC_UK_THIRD, $tolerance);
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
    return array_merge(coUkDomains(), comDomains(), netDomains(),  \freegle\UrlTopLevel\AC_UK_THIRD);
}

/**
 * Returns and array of common domain names
 *
 * return array (of srtring)
 */
function comDomains()
{
    return array(
        "yahoo.com",
        "hotmail.com",
        "gmail.com",
        "btinternet.com",
        "ntlworld.com",
        "googlemail.com",
        "ymail.com",
        "rocketmail.com",
        "aol.com",
        "sky.com",
        "msn.com",
        "outlook.com",
        "btopenworld.com",
        "talk21.com",
        "live.com",
        "icloud.com",
        "me.com",
        "virginmedia.com",
        "mail.com",
        "mac.com",
        "dsl.pipex.com",
        "gmx.com",
        "btconnect.com",
        "supanet.com",
        "onetel.com",
        "bigfoot.com",
        "email.com",
        "lycos.com",
    );
}

/**
 * Returns and array of common domain names
 *
 * return array (of srtring)
 */
function coUkDomains()
{
    return array(
        "yahoo.co.uk",
        "hotmail.co.uk",
        "live.co.uk",
        "tiscali.co.uk",
        "aol.co.uk",
        "o2.co.uk",
        "gmx.co.uk",
        "blueyonder.co.uk",
        "zen.co.uk",
        "homecall.co.uk",
    );
}

/**
  * Returns and array of common domain names
  *
  * return array (of srtring)
  */
function netDomains()
{
    return array(
        "talktalk.net",
        "virgin.net",
        "fsmail.net",
        "tesco.net",
        "uwclub.net",
        "lineone.net",
        "orange.net",
    );
}

/**
 * Returns and array of common domain names
 *
 * return array (of srtring)
 */
function otherDomains()
{
    return array(
        "lancaster.ac.uk",
        "manchester.ac.uk",
        "wp.pl",
        "yahoo.co.in",
        "yahoo.com.au",
        "phonecoop.coop",
        "doctors.org.uk",
        "yahoo.fr",
        "nottingham.ac.uk",
        "yahoo.ca",
        "ntu.ac.uk",
        "homecall.co.uk",
        "yahoo.ie"
    );
}

