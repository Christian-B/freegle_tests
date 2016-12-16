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

const COMMON_DOMAINS_FILE = "CommonDomains.php";
const VERY_COMMON_DOMAINS_FILE = "VeryCommonDomains.php";

const COMMON_MINIMUM = 10;
const VERY_COMMON_MINIMUM = 100;
const DATA_DIVIDER = "  ";

$domainCounts = array();
$topLevelCounts = array();

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
function grabDomain($email){
    global $domainCounts;

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
}

function showDomains(){
    global $domainCounts;

    $myfile = openFile(DOMAINS_GROUPING_FILE, "a");
    foreach($domainCounts as $key => $value) {
        fwrite($myfile, $value . "  " . $key . "\n");
    }
    fwrite($myfile, "\n\n\n");
    fclose($myfile);
    $domainCounts = array();
}

/**
 * Reads the raw emails and groups them into he domains file
 *
 * Note: The same domain can appear more than once
 */
function readEmails(){
    $myfile = openFile(DOMAINS_GROUPING_FILE, "w");
    fclose($myfile);

    $handle = fopen(RAW_EMAILS_FILE, "r");
    if ($handle) {
        $count = 0;
        while (($email = fgets($handle)) !== false) {
            grabDomain($email);
            $count += 1;
            if ($count > 100000) {
                showDomains();
                $count = 0;
            }
        }
        fclose($handle);
        showDomains();
    }
}

function grabTopLevel($line){
    global $topLevelCounts;
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
}

function showTopLevels()
{
    global $topLevelCounts;

    echo "Writing top levels to " . TOP_LEVEL_FILE . "\n";

    arsort($topLevelCounts);

    $myfile = openFile (TOP_LEVEL_FILE, "w");
    foreach($topLevelCounts as $key => $value) {
        fwrite($myfile, $value . DATA_DIVIDER . $key . DATA_DIVIDER . \freegle\DomainChecker\findTopLevelName($key) ."\n");
        #echo $value . TOP_LEVEL_DIVIDER . $key . TOP_LEVEL_DIVIDER . \freegle\DomainChecker\findTopLevelName($key) . "\n";
    }
    fwrite($myfile, "\n\n\n");
    fclose($myfile);
}


function countTopLevels(){
    echo "Finding top level counts\n";
    $handle = fopen(DOMAINS_GROUPING_FILE, "r");
    if ($handle) {
        $count = 0;
        while (($line = fgets($handle)) !== false) {
            grabTopLevel($line);
            $count+=1;
            if ($count % 100000 == 0){
                echo $count . " lines read \n";
            }
        }
        fclose($handle);
        showTopLevels();
    }
}

function arrayFileHeader($path, $array_name){
    $file = openFile($path, "w");
    fwrite($file, "<?php\n\n");
    fwrite($file, "namespace freegle\\" . substr($path, 0, -4) . ";\n\n");
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

function grabDomainLine($line, $topLevel){
    global $domainCounts;

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
            return 1;
        }
    }
    return 0;
}

function saveTopLevelDomains($topLevel){
    global $domainCounts;

    $csvFile = openFile(DOMAINS_DATA_FILES, "a");
    foreach($domainCounts as $key => $value) {
        fwrite($csvFile, $value . ",  " . $key . "\n");
    }
    fclose($csvFile);
}

function createDomainScripts($topLevel){
    global $domainCounts;

    arsort($domainCounts);
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

    $domainCounts = array();
}

function readTopLevel($topLevel, $topLevelName){
    global $domainCounts;
    $domainCount = array();
    $count = 0;

    $handle = fopen(DOMAINS_GROUPING_FILE, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $count+=grabDomainLine($line, $topLevel);
            if ($count % 1000 == 0){
                echo $count . " lines added.\n";
                $count+=1;
            }
        }
        fclose($handle);
        arsort($domainCounts);
        saveTopLevelDomains($topLevel);
        if ($topLevelName != \freegle\DomainChecker\UNKNOW) {
            createDomainScripts($topLevel);
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

#readEmails();
#countTopLevels();
createDomainFiles();