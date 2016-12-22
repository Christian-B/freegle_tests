<?php

require_once("DomainChecker.php");

#Depends on a text file with the raw emails one per line.
const RAW_EMAILS_FILE = "../emails";

#Data files created : Not included in github due to confidentiality
const DOMAINS_GROUPING_FILE = "data/grouped_domains.txt";
CONST TOP_LEVEL_FILE = "data/topLevels.txt";
const DOMAINS_DATA_FILES ="data/domains.csv";
const COMMON_DOMAINS_COUNT_FILE = "data/CommonDomains.php";
const VERY_COMMON_DOMAINS_COUNT_FILE = "data/VeryCommonDomains.php";
const TOP_LEVEL_EXTRA_FILE = "TopLevelExtra.php";
const TOP_LEVEL_EXTRA_COUNT_FILE = "data/TopLevelExtra.php";

#Code files created
const COMMON_DOMAINS_FILE = "CommonDomains.php";
const VERY_COMMON_DOMAINS_FILE = "VeryCommonDomains.php";

const COMMON_MINIMUM = 10;
const VERY_COMMON_MINIMUM = 100;
const DATA_DIVIDER = "  ";

/**
 * @param $path string Path to he file
 * @param $mode string Mode in which to open file "a", "r" or "w"
 * @return resource An open file
 */
function openFile($path, $mode){
    $file = fopen($path, $mode) or die("Unable to open file " . $path);
    return $file;
}

/**
 * If the email comntains one "@" its domain is counted
 *
 * Echos emails that do not contain exactly one "@" and error line is echoed
 * No additional error checking
 *
 *  @param $email string An email address
 *
 *
 */
function grabDomain($email, $domainCounts){
    $parts = explode("@", strtolower(trim($email)));
    $parts_count = count($parts);
    if ($parts_count == 2){
        $domain = $parts[1];
        if (array_key_exists ($domain  , $domainCounts )){
            $count = $domainCounts[$domain];
            $count+=1;
            $domainCounts[$domain] = $count;
        } else {
            $domainCounts[$domain] = 1;
        }
    } else {
        echo "error:" . $email;
    }
    return $domainCounts;
}

function showDomains($domainCounts){
    $myfile = openFile(DOMAINS_GROUPING_FILE, "a");
    foreach($domainCounts as $key => $value) {
        fwrite($myfile, $value . "  " . $key . "\n");
    }
    fwrite($myfile, "\n\n\n");
    fclose($myfile);
}

/**
 * Reads the raw emails and groups them into he domains file
 *
 * Note: The same domain can appear more than once
 */
function readEmails(){
    $domainCounts  = array();

    $myfile = openFile(DOMAINS_GROUPING_FILE, "w");
    fclose($myfile);

    $handle = fopen(RAW_EMAILS_FILE, "r");
    if ($handle) {
        $count = 0;
        while (($email = fgets($handle)) !== false) {
            $domainCounts =  grabDomain($email,$domainCounts);
            $count += 1;
            if ($count > 100000) {
                echo $count . "\n";
                showDomains($domainCounts);
                $domainCounts = array();
                $count = 0;
            }
        }
        fclose($handle);
        showDomains($domainCounts);
    }
}

function grabTopLevel($line, $topLevelCounts)
{
    $parts = explode("  ", trim($line));
    $parts_count = count($parts);
    if ($parts_count == 2){
        $count = $parts[0];
        $domain = $parts[1];
        $checker = new \freegle\DomainChecker\DomainChecker($domain);
        $topLevel = $checker->getOrignalTopLevel();
        if (array_key_exists ($topLevel , $topLevelCounts )){
            $count+= $topLevelCounts[$topLevel];
        }
        $topLevelCounts[$topLevel] = $count;
    }
    return $topLevelCounts;
}

function showTopLevels($topLevelCounts)
{
    echo "Writing top levels to " . TOP_LEVEL_FILE . "\n";
    arsort($topLevelCounts);

    $myfile = openFile (TOP_LEVEL_FILE, "w");

    foreach($topLevelCounts as $key => $value) {
        $checker = new \freegle\DomainChecker\DomainChecker($key);
        fwrite($myfile, $value . DATA_DIVIDER . $key . DATA_DIVIDER . $checker->getOrignalTopLevelName() ."\n");
    }
    fwrite($myfile, "\n\n\n");
    fclose($myfile);
}


function countTopLevels(){
    echo "Finding top level counts\n";
    $topLevelCounts = array();

    $handle = fopen(DOMAINS_GROUPING_FILE, "r");
    if ($handle) {
        $count = 0;
        while (($line = fgets($handle)) !== false) {
            $topLevelCounts = grabTopLevel($line, $topLevelCounts);
            $count+=1;
            if ($count % 100000 == 0){
                echo $count . " lines read \n";
            }
        }
        fclose($handle);
        showTopLevels($topLevelCounts);
        $topLevelCounts = array();
    }
}

function arrayFileHeader($path, $array_name){
    $file = openFile($path, "w");
    fwrite($file, "<?php\n\n");
    fwrite($file, "namespace freegle\\" . substr($path, 0, -4) . ";\n\n");
    fwrite($file, "/*\n");
    fwrite($file, " *Automatically generated file.\n");
    fwrite($file, " *Generated using DataCreator.php\n");
    fwrite($file, " */\n\n");
    fwrite($file, "const " . $array_name . " = array(\n");
    fclose($file);
}

function arrayFileTail($path){
    $file = openFile($path, "a");
    fwrite($file, ");\n");
    fclose($file);
}

function headersForLevelDomains(){
    $csvFile = openFile(DOMAINS_DATA_FILES, "w");
    fwrite($csvFile, 'Domian, # of emails\n');
    fclose($csvFile);

    arrayFileHeader(COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileHeader(COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
    arrayFileHeader(VERY_COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileHeader(VERY_COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
}

function tailsForLevelDomains(){
    arrayFileTail(COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileTail(COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
    arrayFileTail(VERY_COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileTail(VERY_COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
}

function grabDomainLine($line, $topLevel, $domainCounts){
    $parts = explode(DATA_DIVIDER, trim($line));
    $parts_count = count($parts);
    if ($parts_count == 2){
        $count = $parts[0];
        $domain = $parts[1];
        $checker = new \freegle\DomainChecker\DomainChecker($domain);
        if ($topLevel == $checker->getOrignalTopLevel()){
            if (array_key_exists ($domain , $domainCounts )) {
                $count += $domainCounts[$domain];
            }
            $domainCounts[$domain] = $count;
        }
    }
    return $domainCounts;
}

function saveTopLevelDomains($topLevel, $domainCounts){
    $csvFile = openFile(DOMAINS_DATA_FILES, "a");
    foreach($domainCounts as $key => $value) {
        fwrite($csvFile, $value . ",  " . $key . "\n");
    }
    fclose($csvFile);
}

function createDomainScripts($topLevel, $domainCounts){
    $opened = false;

    $commonFile = openFile(COMMON_DOMAINS_FILE, "a");
    $commonCountFile = openFile(COMMON_DOMAINS_COUNT_FILE, "a");
    $veryCommonFile = openFile(VERY_COMMON_DOMAINS_FILE, "a");
    $veryCommonCountFile = openFile(VERY_COMMON_DOMAINS_COUNT_FILE, "a");

    foreach($domainCounts as $key => $value) {
        if ($value > VERY_COMMON_MINIMUM) {
            fwrite($veryCommonFile, "\t\"" . $key . "\",\n");
            fwrite($veryCommonCountFile, "\t\"" . $key . "\", #" . $value . "\n");
        }
        if ($value > COMMON_MINIMUM) {
            if (! $opened){
                fwrite($commonFile, "\t\"". $topLevel . "\" => array (\n");
                fwrite($commonCountFile, "\t\"". $topLevel . "\" => array (\n");
                $opened = true;
            }
            fwrite($commonFile, "\t\t\"" . $key . "\",\n");
            fwrite($commonCountFile, "\t\t\"" . $key . "\", #" . $value . "\n");
            echo $value . "  " . $key . "\n";
        }
    }
    if ($opened) {
        fwrite($commonFile, "\t),\n");
        fwrite($commonCountFile, "\t),\n");
    }

    fclose($commonFile);
    fclose($commonCountFile);
    fclose($veryCommonFile);
    fclose($veryCommonCountFile);
}

function readTopLevel($topLevel, $topLevelName){
    $domainCounts = array();
    $handle = fopen(DOMAINS_GROUPING_FILE, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $domainCounts = grabDomainLine($line, $topLevel, $domainCounts);
        }
        fclose($handle);
        arsort($domainCounts);
        saveTopLevelDomains($topLevel, $domainCounts);
        if ($topLevelName != \freegle\DomainChecker\UNKNOW) {
            createDomainScripts($topLevel, $domainCounts);
        } else {
            echo $topLevel . " unexpected so not adding to scripts\n";
        }
    }
}

function createDomainFiles(){
    echo "create domain files\n";
    headersForLevelDomains();
    $handle = fopen(TOP_LEVEL_FILE, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $parts = explode(DATA_DIVIDER, trim($line));
            $parts_count = count($parts);
            if ($parts_count == 3) {
                $count = $parts[0];
                $topLevel = $parts[1];
                echo $topLevel . " " . $count . "\n";
                readTopLevel($topLevel, $parts[2]);
            }
        }
        fclose($handle);
    }
    tailsForLevelDomains();
}

function countDomainsPerTopLevel()
{
    $handle = fopen(DOMAINS_DATA_FILES, "r");
    if ($handle) {
        $topLevel = "";
        $count = 0;
        while (($line = fgets($handle)) !== false) {
            $info = explode(",  ", trim($line));
            $info_count = count($info);
            if ($info_count != 2) {
                #echo $line;
            } else {
                $domain = $info[1];
                $checker = new \freegle\DomainChecker\DomainChecker($domain);
                if ($topLevel == $checker->getOrignalTopLevel()) {
                    $count += 1;
                } else {
                    echo $topLevel . ": " . $count . "\n";
                    $count = 1;
                    $topLevel = $checker->getOrignalTopLevel();
                }
            }
        }
    }
}

function countParts($line, $partsCounts){
    $info = explode(",  ", trim($line));
    $info_count = count($info);
    if ($info_count != 2) {
         return;
    }
    $domain = $info[1];
    $parts = explode(".", trim($domain));
    $count = count($parts);
    if (array_key_exists($count, $partsCounts)) {
        $partsCounts[$count] = $partsCounts[$count] + 1;
    } else {
        $partsCounts[$count] = 1;
    }
    return $partsCounts;
}

function findExtraDepth($partsCounts){
    $depth = 0;
    $depthCount = 0;
    foreach($partsCounts as $key => $count) {
        if ($count > $depthCount){
            $depthCount = $count;
            $depth = $key;
        }
    }
    return $depth + 1;
}


function findExtraDepths()
{
    echo "Finding Extra Depths\n";
    $extraDepths = array();
    $handle = fopen(DOMAINS_DATA_FILES, "r");
    if ($handle) {
        $topLevel = "";
        $partsCounts = array();
        while (($line = fgets($handle)) !== false) {
            $info = explode(",  ", trim($line));
            $info_count = count($info);
            if ($info_count == 2) {
                $domain = $info[1];
                $checker = new \freegle\DomainChecker\DomainChecker($domain);
                if ($topLevel != $checker->getOrignalTopLevel()) {
                    if ($topLevel!=""){
                        $extraDepth = findExtraDepth($partsCounts);
                        if (array_key_exists ($extraDepth, $partsCounts)){
                            if ($partsCounts[$extraDepth] >= COMMON_MINIMUM) {
                                $extraDepths[$topLevel] = $extraDepth;
                            }
                        }
                    }
                    $partsCounts = array();
                    $topLevel = $checker->getOrignalTopLevel();
                }
                $partsCounts = countParts($line, $partsCounts);
            }
        }
    }
    return $extraDepths;
}

function findExtra($domain, $extraDepth, $extras){
    $parts = explode(".", trim($domain));
    $count = count($parts);
    if ($count == $extraDepth) {
        if (array_key_exists ($parts[1] , $extras )) {
            $domains = $extras[$parts[1]];
        } else {
            $domains = array();
        }
        $domains[] = $domain;
        $extras[$parts[1]] = $domains;
    }
    return $extras;
}


function headersForExtra(){
    arrayFileHeader(TOP_LEVEL_EXTRA_FILE, "DOMAINS");
    arrayFileHeader(TOP_LEVEL_EXTRA_COUNT_FILE, "DOMAINS");
}

function tailsForExtra(){
    arrayFileTail(TOP_LEVEL_EXTRA_FILE, "DOMAINS");
    arrayFileTail(TOP_LEVEL_EXTRA_COUNT_FILE, "DOMAINS");
}

function recordExtras($topLevel, $extras)
{
    $opened = false;
    foreach($extras as $key => $domains) {
        if (count($domains) >= COMMON_MINIMUM) {
            if (! $opened){
                $extraFile = openFile(TOP_LEVEL_EXTRA_FILE, "a");
                $extraCountFile = openFile(TOP_LEVEL_EXTRA_COUNT_FILE, "a");
                fwrite($extraFile, "\t\"" . $topLevel . "\" => array (\n");
                fwrite($extraCountFile, "\t\"" . $topLevel . "\" => array (\n");
            }
            $opened = true;
            fwrite($extraFile, "\t\t\"" . $key . "." . $topLevel . "\",\n");
            fwrite($extraCountFile, "\t\t\"" . $key . "." . $topLevel . "\", #" . count($domains)  . "\n");
            echo $key . "." . $topLevel . "  " . count($domains) . "\n";
        }
    }
    if ($opened) {
        fwrite($extraFile, "\t),\n");
        fwrite($extraCountFile, "\t),\n");
        fclose($extraFile);
        fclose($extraCountFile);
    }
    return $opened;
}

function recordExtrasDepths($extrasdepths, $path)
{
    $file = openFile($path, "a");
    fwrite($file, "\nconst EXTRA_DEPTHS = array(\n");
    foreach($extrasdepths as $key => $depth) {
        fwrite($file, "\t\"" . $key . "\"=>" . $depth . ",\n");
    }
    fwrite($file, ");\n");
    fclose($file);
}

function findAllExtras()
{
    $extraDepths = findExtraDepths();

    headersForExtra();
    $doCheck = false;
    $extras = array();
    $handle = fopen(DOMAINS_DATA_FILES, "r");
    if ($handle) {
        $topLevel = "";
        while (($line = fgets($handle)) !== false) {
            $info = explode(",  ", trim($line));
            $info_count = count($info);
            if ($info_count == 2) {
                $domain = $info[1];
                $checker = new \freegle\DomainChecker\DomainChecker($domain);
                if ($topLevel != $checker->getOrignalTopLevel()) {
                    if ($doCheck) {
                        if (! recordExtras($topLevel, $extras)) {
                            unset($extraDepths[$topLevel]);
                        }
                    }
                    $topLevel = $checker->getOrignalTopLevel();
                    $doCheck = array_key_exists ($topLevel, $extraDepths);
                    $extras = array();
                }
                if ($doCheck){
                    $extras = findExtra($domain, $extraDepths[$topLevel], $extras);
                }
            }
        }
    }
    tailsForExtra();
    recordExtrasDepths($extraDepths, TOP_LEVEL_EXTRA_FILE);
    recordExtrasDepths($extraDepths, TOP_LEVEL_EXTRA_COUNT_FILE);
}

#readEmails();
#countTopLevels();
#createDomainFiles();
findAllExtras();
