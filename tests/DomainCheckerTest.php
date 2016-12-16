<?php

require_once("DomainChecker.php");

class DomainCheckerTest extends PHPUnit_Framework_TestCase
{
    public function verifyChecker($original_domain, $original_top_level, $original_top_level_name)
    {
        $checker = new \freegle\DomainChecker\DomainChecker($original_domain);
        $this->assertEquals($original_domain, $checker->getOriginalDomain());
        $this->assertEquals($original_top_level, $checker->getOrignalTopLevel());
        $this->assertEquals($original_top_level_name, $checker->getOrignalTopLevelName());
    }

    public function testYahooCoUk()
    {
        $this->verifyChecker("yahoo.co.uk", "co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL);
    }

    public function testAalCom()
    {
        $this->verifyChecker("aal.com", "com", \freegle\UrlTopLevel\COMMERCIAL);
    }

    public function testYahoobAD()
    {
        $this->verifyChecker("yahoo.bad", "bad", \freegle\DomainChecker\UNKNOW);
    }

    public function testYapooCoUk()
    {
        $this->verifyChecker("yapoo.co.uk", "co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL);
    }

    public function testYahooCoU()
    {
        $this->verifyChecker("yahoo.co.u", "u", \freegle\DomainChecker\UNKNOW);
    }

    public function testManchestoorAcUk()
    {
        $this->verifyChecker("manchestoor.ac.uk", "ac.uk", \freegle\UrlTopLevel\UK_ACADEMIC);
    }

}
