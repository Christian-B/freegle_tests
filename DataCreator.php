<?php

require_once("DomainChecker.php");

/**
 * Reads in an email file and creates script and data file.
 *
 * This script has four main stages:
 *      readEmails();
 *      countTopLevels();
 *      createDomainFiles();
 *      findAllExtras();
 *
 * See the idividual code for more information
 */

#Depends on a text file with the raw emails one per line.
const RAW_EMAILS_FILE = "../emails";

#Data files created : Not included in github due to confidentiality
const DOMAINS_GROUPING_FILE = "data/grouped_domains.txt"; #domains and frequency but with duplicates
CONST TOP_LEVEL_FILE = "data/topLevels.txt";  #Frequency of top levels found
const DOMAINS_DATA_FILES ="data/domains.csv"; #Frequnecy of all domains found without duplicates

#Code files created
const COMMON_DOMAINS_FILE = "CommonDomains.php";
const VERY_COMMON_DOMAINS_FILE = "VeryCommonDomains.php";
const TOP_LEVEL_EXTRA_FILE = "TopLevelExtra.php";

#Copies of the code files annotated with the frequency each option was found.
const COMMON_DOMAINS_COUNT_FILE = "data/CommonDomains.php";
const VERY_COMMON_DOMAINS_COUNT_FILE = "data/VeryCommonDomains.php";
const TOP_LEVEL_EXTRA_COUNT_FILE = "data/TopLevelExtra.php";

const COMMON_MINIMUM = 10;
const VERY_COMMON_MINIMUM = 100;
const DATA_DIVIDER = "  ";

#General utils
/**
 * @param $path string Path to he file
 * @param $mode string Mode in which to open file "a", "r" or "w"
 * @return resource An open file
 */
function openFile($path, $mode){
    $file = fopen($path, $mode) or die("Unable to open file " . $path);
    return $file;
}



#readEmails() section
/**
 * If the email comntains one "@" its domain is counted
 *
 * Echos emails that do not contain exactly one "@"
 * No additional error checking
 *
 * @param $email string An email address
 * @param $domainCounts array Frequency count of each domain found
 * @return array Frequency count of each domain found
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

/**
 * Writes the domain frequency to file
 *
 * @param $domainCounts array Frequency count of each domain found
 *
 */
function recordsDomains($domainCounts){
    $myfile = openFile(DOMAINS_GROUPING_FILE, "a");
    foreach($domainCounts as $key => $value) {
        fwrite($myfile, $value . "  " . $key . "\n");
    }
    fwrite($myfile, "\n\n\n");
    fclose($myfile);
}

/**
 * Reads the raw emails and groups them into domains recording the frequency of each domain
 *
 * Due to the number of different domains and to avoid the frequency array getting too big.
 * The email file is read in blocks and the frequencies recorded.
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
                recordsDomains($domainCounts);
                $domainCounts = array();
                $count = 0;
            }
        }
        fclose($handle);
        recordsDomains($domainCounts);
    }
}



#countTopLevels() section
/**
 * Extracts the top level from the domain and updates the frequency array
 * @param $line String A line with the frequency of a domain
 * @param $topLevelCounts array Frequency count of each top level found
 * @return array Frequency count of each top level found
 */
function grabTopLevel($line, $topLevelCounts)
{
    $parts = explode("  ", trim($line));
    $parts_count = count($parts);
    if ($parts_count == 2){
        $count = $parts[0];
        $domain = $parts[1];
        $checker = new \freegle\DomainChecker\DomainChecker($domain);
        $topLevel = $checker->getTopLevel();
        if (array_key_exists ($topLevel , $topLevelCounts )){
            $count+= $topLevelCounts[$topLevel];
        }
        $topLevelCounts[$topLevel] = $count;
    }
    return $topLevelCounts;
}

/**
 * Writes the top level frequencies to file
 *
 * Also includes the name of each top level
 *
 * @param $topLevelCounts array Frequency count of each top level found
 */
function recordTopLevels($topLevelCounts)
{
    echo "Writing top levels to " . TOP_LEVEL_FILE . "\n";
    arsort($topLevelCounts);

    $myfile = openFile (TOP_LEVEL_FILE, "w");

    foreach($topLevelCounts as $key => $value) {
        $checker = new \freegle\DomainChecker\DomainChecker($key);
        fwrite($myfile, $value . DATA_DIVIDER . $key . DATA_DIVIDER . $checker->getTopLevelName() ."\n");
    }
    fwrite($myfile, "\n\n\n");
    fclose($myfile);
}

/**
 * Counts and records the frequency of each of the top levels
 *
 * The top level frequency file is used by the farther stages.
 */
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
        recordTopLevels($topLevelCounts);
        $topLevelCounts = array();
    }
}


#Utils used for various steps
/**
 * Starts a script file that will hold an array constant
 *
 * @param $path string Path to the script file to start array
 * @param $array_name string Name of the array to start
 */
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

/**
 * @param $path string Path to the script file to end array
 */
function arrayFileTail($path){
    $file = openFile($path, "a");
    fwrite($file, ");\n");
    fclose($file);
}


#createDomainFiles Section
/**
 * Starts the data , scripts and data sccripts files
 */
function headersForLevelDomains(){
    $csvFile = openFile(DOMAINS_DATA_FILES, "w");
    fwrite($csvFile, 'Domian, # of emails\n');
    fclose($csvFile);

    arrayFileHeader(COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileHeader(COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
    arrayFileHeader(VERY_COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileHeader(VERY_COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
}

/**
 * Ends the scripts and data sccripts files
 *
 * The data file does not need a specific end
 */
function tailsForLevelDomains(){
    arrayFileTail(COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileTail(COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
    arrayFileTail(VERY_COMMON_DOMAINS_FILE, "DOMAINS");
    arrayFileTail(VERY_COMMON_DOMAINS_COUNT_FILE, "DOMAINS");
}

/**
 * Extracts the top level from the domain and updates the frequency array
 * @param $line String A line with the frequency of a domain
 * @param $topLevelCounts array Frequency count of each top level found
 * @return array Frequency count of each top level found
 */

/**
 * Adds the dominaand frequency but only if it matches the top level and updates the frequency array
 *
 * Lines that do not match the top level currntly being counted are ignored
 *
 * @param $line String frequency and domain
 * @param $topLevel currently being counted
 * @param $domainCounts array Frequency count of each domain
 * @return array Frequency count of each domain
 */
function grabDomainLine($line, $topLevel, $domainCounts){
    $parts = explode(DATA_DIVIDER, trim($line));
    $parts_count = count($parts);
    if ($parts_count == 2){
        $count = $parts[0];
        $domain = $parts[1];
        $checker = new \freegle\DomainChecker\DomainChecker($domain);
        if ($topLevel == $checker->getTopLevel()){
            if (array_key_exists ($domain , $domainCounts )) {
                $count += $domainCounts[$domain];
            }
            $domainCounts[$domain] = $count;
        }
    }
    return $domainCounts;
}

/**
 * Adds all the domain frequencies to the data file
 *
 * @param $topLevel currently being counted
 * @param $domainCounts array Frequency count of each domain
 */
function recordTopLevelDomains($domainCounts){
    $csvFile = openFile(DOMAINS_DATA_FILES, "a");
    foreach($domainCounts as $key => $value) {
        fwrite($csvFile, $value . ",  " . $key . "\n");
    }
    fclose($csvFile);
}

/**
 * Addes the domains (and frequencies) to the code scripts
 *
 * For the common domains file a enty is added for the top level as key and an array of the domains as value
 * This allows for checking of only the domains for the used top level
 *
 * For the very common domains file the domains are simple added to the single array
 *
 * In each case only the domains with a frequency above the cutoff are added.
 *
 * For the data versions of the files each domain is annotated with the frequency.
 * These serve purely for reference
 * @param $topLevel
 * @param $domainCounts
 */
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

/**
 * Creates the domain files for a single top level
 *
 * Domains from other to levels are ignored
 *
 * All domains are recorded in the data fle.
 *
 * If the top level has a name the domains could be added to the scripts.
 * Assuming they pass the conditions in createDomainScripts
 *
 * @param $topLevel string top level for which domains should be added
 * @param $topLevelName string name of the top level (to check it is not unkown
 */
function createDomainFilesForTopLevel($topLevel, $topLevelName){
    $domainCounts = array();
    $handle = fopen(DOMAINS_GROUPING_FILE, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $domainCounts = grabDomainLine($line, $topLevel, $domainCounts);
        }
        fclose($handle);
        arsort($domainCounts);
        recordTopLevelDomains($domainCounts);
        if ($topLevelName != \freegle\DomainChecker\UNKNOW) {
            createDomainScripts($topLevel, $domainCounts);
        } else {
            echo $topLevel . " unexpected so not adding to scripts\n";
        }
    }
}

/**
 * Creates the domain files for each top level one by one
 *
 * Due to the number of domains they are handled groued by top level
 * This prevents the frequency array getting too big
 *
 * Also adds headers and tails to the data and script files.
 *
 */
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
                createDomainFilesForTopLevel($topLevel, $parts[2]);
            }
        }
        fclose($handle);
    }
    tailsForLevelDomains();
}


#currently unsed code
/**
 * Counts the number of unique domains found in each top levek
 *
 */
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
                if ($topLevel == $checker->getTopLevel()) {
                    $count += 1;
                } else {
                    echo $topLevel . ": " . $count . "\n";
                    $count = 1;
                    $topLevel = $checker->getTopLevel();
                }
            }
        }
    }
}


#findAllExtras section
/**
 * Counts the number of parts in the lines domain and adds the result to the frequecy array
 *
 * The domain is split into parts devided by the dot
 * The result is added to the frequency array
 *
 * @param $domain string Domain to count and save number of parts of
 * @param $partsCounts array Frequency array of number of parts
 * @return array Frequency array of number of parts
 */
function countParts($domain, $partsCounts){
    $parts = explode(".", trim($domain));
    $count = count($parts);
    if (array_key_exists($count, $partsCounts)) {
        $partsCounts[$count] = $partsCounts[$count] + 1;
    } else {
        $partsCounts[$count] = 1;
    }
    return $partsCounts;
}

/**
 * Finds the most common number of parts and returns one more as that is one extra part to normal
 *
 * @param $partsCounts array Frequency array of number of parts
 * @return int One more than key of most common frequency
 */
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

/**
 * Looks for the extra depth number of parts for each top level
 *
 * The reason this is done is because some countries have a second level and some do not. ex  foo.in and foo.co.in
 * This avoids havig to program this infor for every country.
 * But does depend on the top lvel tool handdling countires that mix having  second level and not having one
 *
 * Reads through the domains data file which is sorted bu top level
 * For each top level it counts the parts frequency
 * Then finds the extra depth
 * Then if there are enough different domains with that number of parts the extta depth is save
 *
 * @return array Map of top levels to the extra depth
 */
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
                if ($topLevel != $checker->getTopLevel()) {
                    if ($topLevel!=""){
                        $extraDepth = findExtraDepth($partsCounts);
                        if (array_key_exists ($extraDepth, $partsCounts)){
                            if ($partsCounts[$extraDepth] >= COMMON_MINIMUM) {
                                $extraDepths[$topLevel] = $extraDepth;
                            }
                        }
                    }
                    $partsCounts = array();
                    $topLevel = $checker->getTopLevel();
                }
                $partsCounts = countParts($domain, $partsCounts);
            }
        }
    }
    return $extraDepths;
}

/**
 * Checks a domain to see if it has extra depth counts the uppdates the frequency array
 *
 * If the domain has exactly extradepth arts (slit on dot)
 * Find the part before the extra (between it and the top level)
 * Increments the frequency mapedto that by one
 *
 * @param $domain string Domain to check
 * @param $extraDepth int number of parts in a domain with extra depth
 * @param $extras array map of middle arts to domains with that middle part
 * @return array map of middle arts to domains with that middle part
 */
function findExtra($domain, $extraDepth, $extras){
    $parts = explode(".", trim($domain));
    $count = count($parts);
    if ($count == $extraDepth) {
        if (array_key_exists ($parts[1] , $extras )) {
            $domainsCount = $extras[$parts[1]] + 1;
        } else {
            $domainsCount = 1;
        }
        $extras[$parts[1]] = $domainsCount;
    }
    return $extras;
}

/**
 * Starts the code and data code files
 */
function headersForExtra(){
    arrayFileHeader(TOP_LEVEL_EXTRA_FILE, "DOMAINS");
    arrayFileHeader(TOP_LEVEL_EXTRA_COUNT_FILE, "DOMAINS");
}

/**
 * Ends the code and data code files
 */
function tailsForExtra(){
    arrayFileTail(TOP_LEVEL_EXTRA_FILE, "DOMAINS");
    arrayFileTail(TOP_LEVEL_EXTRA_COUNT_FILE, "DOMAINS");
}

/**
 * Records the top level plus middle that ma to enought different domains
 *
 * if the frequency of domains counted for a middle is enough to save thedomain as comman
 * add the middle plus toplevel to an array mapped to the top level
 *
 * Also saves it with frequency comments to data scrippt file
 *
 * @param $topLevel string top level to mapp to
 * @param $extras array map of middle arts to domains with that middle part
 * @return bool True if at least one middle point had enough domains to be saved (otherwise false)
 */
function recordExtras($topLevel, $extras)
{
    $opened = false;
    foreach($extras as $key => $domainsCount) {
        if ($domainsCount >= COMMON_MINIMUM) {
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

/**
 * Adds the Extra Depth mappings to the path
 *
 * @param $extraDepths array Map of top levels to the extra depth
 * @param $path string path to code or code data file
 */
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


/**
 * Finds domains that use extra depth and records theres to code and code depth
 *
 * An extra depth domaims are isps that put the customers id after the @ and before their normal domain
 * For example customer1.demon.co.uk and customer2.demon.co.uk
 * The extra depth is the number of parts that such domains contain. 4 in the above examples
 *
 * First finds the extra depth for each top level
 * Then finds the dmiddle part of domains with extra depth
 *    and the number of different domains found with this middle part.
 * If enough domains are found the domain less the extra (middle part and top level) is saved.
 * If at least one such set of domains is found the extra depth is later saved.
 */
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
                if ($topLevel != $checker->getTopLevel()) {
                    if ($doCheck) {
                        if (! recordExtras($topLevel, $extras)) {
                            unset($extraDepths[$topLevel]);
                        }
                    }
                    $topLevel = $checker->getTopLevel();
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
