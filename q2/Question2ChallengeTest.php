<?php
use PHPUnit\Framework\TestCase;

require_once "Question2Challenge.php";

class Question2ChallengeTest extends TestCase
{
    public function testQuestion2Challenge()
    {
        $Question2Challenge = new Question2Challenge();
        $TestString = '<div sc-prop sc-alias="" sc-type="Organization"><div sc-name="Alice">Hello <i sc-name="Wonderland">World</i></div></div>';
        $ExpectedResult = array(
            array('prop' => '', 'alias' => '', 'type' => 'Organization'),
            array(
                array('name' => 'Alice'), 
                array(
                    array('name' => 'Wonderland')
                )
            )
        );

        $Test = $Question2Challenge->get_scheme($TestString);

        $this->assertEquals($ExpectedResult, $Test);
    }
}