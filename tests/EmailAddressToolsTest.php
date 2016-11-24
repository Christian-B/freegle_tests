<?php

require_once("EmailAddressTools.php");
require_once("UrlTopLevel.php");

class EmailAddressToolsTest extends PHPUnit_Framework_TestCase
{
    //email_error tests

    public function testCorrect()
    {
        $this->assertFalse(\freegle\EmailAddressTools\email_error("member1@yahoo.co.uk"));
    }

    public function testNoAt()
    {
        $this->assertEquals(\freegle\EmailAddressTools\NO_AT, \freegle\EmailAddressTools\email_error("member1yahoo.co.uk"));
    }

    public function testMultipleAt()
    {
        $this->assertStringMatchesFormat('%s 3 %s', \freegle\EmailAddressTools\email_error("member1@@yahoo@.co.uk"));
    }

    public function testNoDot()
    {
        $this->assertEquals(\freegle\EmailAddressTools\NO_DOT_IN_DOMAIN, \freegle\EmailAddressTools\email_error("member1@yahoocouk"));
    }

    public function testStartTab()
    {
        $this->assertEquals(\freegle\EmailAddressTools\START_WHITE_SPACE, \freegle\EmailAddressTools\email_error("\tmember1@yahoo.co.uk"));
    }

    public function testEndSpace()
    {
        $this->assertEquals(\freegle\EmailAddressTools\END_WHITE_SPACE , \freegle\EmailAddressTools\email_error("member1@yahoo.co.uk "));
    }

    public function testOtherError()
    {
        $this->assertEquals(\freegle\EmailAddressTools\OTHER_ERROR, \freegle\EmailAddressTools\email_error("member1@ya&oo.co.uk"));
    }

    //Top Level tests

    public function testTopLevelCoUK()
    {
        $this->assertEquals(\freegle\UrlTopLevel\UK_COMMERCIAL, \freegle\EmailAddressTools\emailTopLevel("member1@yahoo.co.uk"));
    }

    public function testTopLevelCom()
    {
        $this->assertEquals(\freegle\UrlTopLevel\COMMERCIAL, \freegle\EmailAddressTools\emailTopLevel("member1@yahoo.com"));
    }

    public function testTopLevelBad()
    {
        $this->assertEquals(\freegle\EmailAddressTools\UNKNOW, \freegle\EmailAddressTools\emailTopLevel("member1@yahoo.bad"));
    }


    public function testRecommendCoUKSame()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailAddressTools\recommenedEmail("member1@yahoo.co.uk"));
    }

    public function testRecommendCoUk()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailAddressTools\recommenedEmail("member1@yapoo.co.uk"));
    }

    public function testRecommendCoU()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailAddressTools\recommenedEmail("member1@yahoo.co.u"));
    }

    public function testRecommendComSame()
    {
        $this->assertEquals("member342@aol.com", \freegle\EmailAddressTools\recommenedEmail("member342@aol.com"));
    }

    public function testRecommendCom()
    {
        $this->assertEquals("member342@aol.com", \freegle\EmailAddressTools\recommenedEmail("member342@aol.com"));
    }

    public function testRecommendAcuk()
    {
        $this->assertEquals("peter.brown@manchester.ac.uk", \freegle\EmailAddressTools\recommenedEmail("peter.brown@manchestoor.ac.uk"));
    }

    public function testRecommendSubAcuk()
    {
        $this->assertEquals("peter.brown@inter.manchester.ac.uk", \freegle\EmailAddressTools\recommenedEmail("peter.brown@inter.manchestoor.ac.uk"));
    }

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


}
