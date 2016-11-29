<?php

require_once("DomainChecker.php");

class DomainCheckerTest extends PHPUnit_Framework_TestCase
{
    public function verifyChecker($original_domain, $original_top_level)
    {
        $checker = new \freegle\DomainChecker\DomainChecker($original_domain);
        $this->assertEquals($original_domain, $checker->getOriginalDomain());
        $this->assertEquals($original_top_level, $checker->getOrignalTopLevel());
    }

    public function testYahooCoUk()
    {
        $this->verifyChecker("yahoo.co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL);
    }

    public function testYahooCom()
    {
        $this->verifyChecker("yahoo.com", \freegle\UrlTopLevel\COMMERCIAL);
    }


}
