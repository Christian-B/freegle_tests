<?php

require_once("DomainRecommender.php");

class DomainRecommenderTest extends PHPUnit_Framework_TestCase {

    public function verifyChecker($original_domain, $original_top_level, $original_top_level_name, $recommended_domain)
    {
        $checker = new \freegle\DomainRecommender\DomainRecommender($original_domain);
        $this->assertEquals($original_domain, $checker->getOriginalDomain());
        $this->assertEquals($original_top_level, $checker->getOrignalTopLevel());
        $this->assertEquals($original_top_level_name, $checker->getOrignalTopLevelName());
        $this->assertEquals($recommended_domain, $checker->getRecommendedDomain());
    }

    public function testYahooCoUk()
    {
        $this->verifyChecker("yahoo.co.uk", "co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL, "yahoo.co.uk");
    }

    public function testAalCom()
    {
        $this->verifyChecker("aal.com", "com", \freegle\UrlTopLevel\COMMERCIAL, "aol.com");
    }

    public function testYahoobAD()
    {
        $this->verifyChecker("yahoo.bad", "bad", \freegle\DomainChecker\UNKNOW, "yahoo.ca");
    }

    public function testYapooCoUk()
    {
        $this->verifyChecker("yapoo.co.uk", "co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL, "yahoo.co.uk");
    }

    public function testYahooCoU()
    {
        $this->verifyChecker("yahoo.co.u", "u", \freegle\DomainChecker\UNKNOW, "yahoo.co.uk");
    }

    public function testMancheesterAcUk()
    {
        $this->verifyChecker("mancheester.ac.uk", "ac.uk", \freegle\UrlTopLevel\UK_ACADEMIC, "manchester.ac.uk");
    }

    public function testExtraOxfrdAcUk()
    {
        $this->verifyChecker("wolfson.oxfrd.ac.uk", "ac.uk", \freegle\UrlTopLevel\UK_ACADEMIC, "wolfson.oxford.ac.uk");
    }

    /*
    public function testRecommendWhiteSpcae()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailAddressTools\recommenedEmail(" member1@yaoo.co.uk "));
    }

    public function testRecommendCaps()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailAddressTools\recommenedEmail("member1@YAHooO.co.UK"));
    }

    public function testRecommendJunkCoUk()
    {
        $this->assertFalse(\freegle\EmailAddressTools\recommenedEmail("member1@junk.co.uk"));
    }

    public function testRecommendJunkCoUkOverfit()
    {
        $this->assertEquals("member1@zen.co.uk", \freegle\EmailAddressTools\recommenedEmail("member1@junk.co.uk", 5));
    }
*/


}
