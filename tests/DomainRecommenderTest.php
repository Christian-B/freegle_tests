<?php

require_once("DomainRecommender.php");

class DomainRecommenderTest extends PHPUnit_Framework_TestCase
{

    public function verifyChecker($original_domain, $known, $recommended_domain)
    {
        $checker = new \freegle\DomainRecommender\DomainRecommender($original_domain);
        $this->assertEquals($known, $checker->isKnown());
        $this->assertEquals($recommended_domain, $checker->getRecommendedDomain());
    }

    public function testParent()
    {
        $checker = new \freegle\DomainRecommender\DomainRecommender("yahoo.co.uk");
        $this->assertEquals("yahoo.co.uk", $checker->getOriginalDomain());
        $this->assertEquals("co.uk", $checker->getTopLevel());
        $this->assertEquals(\freegle\UrlTopLevel\UK_COMMERCIAL, $checker->getTopLevelName());
    }

    public function testYahooCoUk()
    {
        $this->verifyChecker("yahoo.co.uk" , true, "yahoo.co.uk");
    }

    public function testAalCom()
    {
        $this->verifyChecker("aal.com", false, "aol.com");
    }

    public function testYahooBad()
    {
        $this->verifyChecker("yahoo.bad", false,  "yahoo.ca");
    }

    public function testYapooCoUk()
    {
        $this->verifyChecker("yapoo.co.uk", false, "yahoo.co.uk");
    }

    public function testYapooCoUkCaps()
    {
        $this->verifyChecker("yaPoo.co.UK", false, "yahoo.co.uk");
    }

    public function testYapooCoUkWhiteSpace()
    {
        $this->verifyChecker("\tyapoo.co.uk ", false,  "yahoo.co.uk");
    }

    public function testYahooCoU()
    {
        $this->verifyChecker("yahoo.co.u", false,  "yahoo.co.uk");
    }

    public function testMancheesterAcUk()
    {
        $this->verifyChecker("mancheester.ac.uk",  false, "manchester.ac.uk");
    }

    public function testExtraOxfrdAcUk()
    {
        $this->verifyChecker("wolfson.oxfrd.ac.uk",  false, "wolfson.oxford.ac.uk");
    }

    public function testBad()
    {
        $this->verifyChecker("thisDomainisNotKnown.co.uk", false,  false);
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
