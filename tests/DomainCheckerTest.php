<?php

require_once("DomainChecker.php");

class DomainCheckerTest extends PHPUnit_Framework_TestCase
{
    public function verifyChecker($original_domain, $original_top_level, $recommended_domain)
    {
        $checker = new \freegle\DomainChecker\DomainChecker($original_domain);
        $this->assertEquals($original_domain, $checker->getOriginalDomain());
        $this->assertEquals($original_top_level, $checker->getOrignalTopLevel());
        $this->assertEquals($recommended_domain, $checker->getRecommendedDomain());
    }

    public function testYahooCoUk()
    {
        $this->verifyChecker("yahoo.co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL, "yahoo.co.uk");
    }

    public function testAalCom()
    {
        $this->verifyChecker("aal.com", \freegle\UrlTopLevel\COMMERCIAL, "aol.com");
    }

    public function testYahoobAD()
    {
        $this->verifyChecker("yahoo.bad", \freegle\DomainChecker\UNKNOW, "yahoo.ca");
    }

    public function testYapooCoUk()
    {
        $this->verifyChecker("yapoo.co.uk", \freegle\UrlTopLevel\UK_COMMERCIAL, "yahoo.co.uk");
    }

    public function testYahooCoU()
    {
        $this->verifyChecker("yahoo.co.u", \freegle\DomainChecker\UNKNOW, "yahoo.co.uk");
    }

    public function testManchestoorAcUk()
    {
        $this->verifyChecker("manchestoor.ac.uk", \freegle\UrlTopLevel\UK_ACADEMIC, "manchester.ac.uk");
    }

    public function testCsManchestoorAcUk()
    {
        $this->verifyChecker("cs.manchestoor.ac.uk", \freegle\UrlTopLevel\UK_ACADEMIC, "cs.manchester.ac.uk");
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
