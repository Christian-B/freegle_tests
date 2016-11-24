<?php

require_once("EmailCleaner.php");

class EmailCleanerTest extends PHPUnit_Framework_TestCase
{

    public function testCorrect()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailCleaner\cleanEmail("member1@yahoo.co.uk"));
    }

    public function testSpaceBefore()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailCleaner\cleanEmail(" member1@yahoo.co.uk"));
    }

    public function testTabAfter()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailCleaner\cleanEmail("member1@yahoo.co.uk\t"));
    }

    /**
     * Tempting to remove a middle space but it could als be a misplaced underscore ext.
     */
    public function testSpaceMiddleLeft()
    {
        $this->assertEquals("member1 @yahoo.co.uk", \freegle\EmailCleaner\cleanEmail("member1 @yahoo.co.uk"));
    }


    public function testLowerCase()
    {
        $this->assertEquals("member1@yahoo.co.uk", \freegle\EmailCleaner\cleanEmail("meMBer1@yaHOo.co.UK"));
    }

}
