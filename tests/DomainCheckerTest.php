<?php

require_once("DomainChecker.php");

class DomainCheckerTest extends PHPUnit_Framework_TestCase
{
    public function verifyChecker($original_domain, $top_level, $top_level_name)
    {
        $checker = new \freegle\DomainChecker\DomainChecker($original_domain);
        $this->assertEquals($original_domain, $checker->getOriginalDomain());
        $this->assertEquals($top_level, $checker->getTopLevel());
        $this->assertEquals($top_level_name, $checker->getTopLevelName());
    }

    public function testYahooCoUk()
    {
        $this->verifyChecker("yahoo.co.uk", "co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL);
    }

    public function testYahooCoUkCaps()
    {
        $this->verifyChecker("yaHOO.co.uK", "co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL);
    }

    public function testYahooCoUkWhiteSpace()
    {
        $this->verifyChecker("     yahoo.co.uk\t", "uk\t",  \freegle\DomainChecker\UNKNOW);
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
