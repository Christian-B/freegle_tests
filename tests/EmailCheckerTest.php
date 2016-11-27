<?php

require_once("EmailChecker.php");

class EmailCheckerTest extends PHPUnit_Framework_TestCase
{

    public function verifyChecker($original_email, $clean_email, $original_error = false, $clean_error = false)
    {
        $checker = new \freegle\EmailChecker\EmailChecker($original_email);
        $this->assertEquals($original_email, $checker->getOriginalEmail());
        $this->assertEquals($clean_email, $checker->getCleanEmail());
        $this->assertEquals($original_error, $checker->getOriginalError());
        $this->assertEquals($clean_error, $checker->getCleanError());
        return $checker;
    }


    public function testYahooCoUk(){
        $this->verifyChecker("member1@yahoo.co.uk", "member1@yahoo.co.uk");
    }

    public function testSpaceBefore()
    {
        $this->verifyChecker(" member1@yahoo.co.uk", "member1@yahoo.co.uk", \freegle\EmailChecker\START_WHITE_SPACE);
    }

    public function testTabAfter()
    {
        $this->verifyChecker("member1@yahoo.co.uk\t", "member1@yahoo.co.uk", \freegle\EmailChecker\END_WHITE_SPACE);
    }

    /**
     * Tempting to remove a middle space but it could als be a misplaced underscore ext.
     */
    public function testSpaceMiddle()
    {
        $error =  \freegle\EmailChecker\OTHER_ERROR;
        $this->verifyChecker("member1 @yahoo.co.uk","member1 @yahoo.co.uk", $error,  $error);
    }


    public function testLowerCase()
    {
        $this->verifyChecker("memBer1@yaHOo.co.uk", "member1@yahoo.co.uk");
    }

    /**
     * Tempting to remove a middle space but it could als be a misplaced underscore ext.
     */
    public function testNoAt()
    {
        $error = \freegle\EmailChecker\NO_AT;
        $this->verifyChecker("member1yahoo.co.uk", "member1yahoo.co.uk", $error, $error);
    }

    /**
     * Tempting to remove a middle space but it could als be a misplaced underscore ext.
     */
    public function testTripleAt()
    {
        $error = \freegle\EmailChecker\AT_COUNT_START . 3 . \freegle\EmailChecker\AT_COUNT_END;
        $this->verifyChecker("member1@@yahoo@.co.uk", "member1@@yahoo@.co.uk", $error, $error);
    }


    public function testNoDot()
    {
        $error = \freegle\EmailChecker\NO_DOT_IN_DOMAIN;
        $this->verifyChecker("member1@yahoocouk", "member1@yahoocouk", $error, $error);
    }

    public function testOtherError()
    {
        $error = \freegle\EmailChecker\OTHER_ERROR;
        $this->verifyChecker("member1@ya&oo.co.uk", "member1@ya&oo.co.uk", $error, $error);
    }
}
