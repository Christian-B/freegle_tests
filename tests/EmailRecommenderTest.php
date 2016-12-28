<?php

require_once("EmailRecommender.php");

class EmailRecommendeTest extends PHPUnit_Framework_TestCase
{

    public function verifyChecker($originalEmail, $recommendedEmail)
    {
        $checker = new \freegle\EmailRecommender\EmailRecommender($originalEmail);
        $this->assertEquals($recommendedEmail, $checker->getRecommendedEmail());
    }

    public function testParent()
    {
        $checker = new \freegle\EmailRecommender\EmailRecommender(" member1@yahoo.co.uk");
        $this->assertEquals(" member1@yahoo.co.uk", $checker->getOriginalEmail());
        $this->assertEquals("member1@yahoo.co.uk", $checker->getCleanEmail());
        $this->assertEquals(\freegle\EmailChecker\START_WHITE_SPACE, $checker->getOriginalError());
        $this->assertEquals(false, $checker->getCleanError());
        return $checker;
    }

    public function testYahooCoUk()
    {
        $this->verifyChecker("member1@yahoo.co.uk" , "member1@yahoo.co.uk");
    }

    public function testAalCom()
    {
        $this->verifyChecker("ember1@aal.com", "ember1@aol.com");
    }

    public function testYahooBad()
    {
        $this->verifyChecker("joe@yahoo.bad", "joe@yahoo.ca");
    }

    public function testYapooCoUk()
    {
        $this->verifyChecker("pete@yapoo.co.uk", "pete@yahoo.co.uk");
    }

    public function testYapooCoUkCaps()
    {
        $this->verifyChecker("PETER@yaPoo.co.UK","peter@yahoo.co.uk");
    }

    public function testYapooCoUkWhiteSpace()
    {
        $this->verifyChecker("\tpul@yapoo.co.uk ", "pul@yahoo.co.uk");
    }

    public function testYahooCoU()
    {
        $this->verifyChecker("mary@yahoo.co.u", "mary@yahoo.co.uk");
    }

    public function testMancheesterAcUk()
    {
        $this->verifyChecker("123@mancheester.ac.uk", "123@manchester.ac.uk");
    }

    public function testExtraOxfrdAcUk()
    {
        $this->verifyChecker("prof@wolfson.oxfrd.ac.uk", "prof@wolfson.oxford.ac.uk");
    }

    public function testBad()
    {
        $this->verifyChecker("mark@thisDomainisNotKnown.co.uk", false);
    }

}
