<?php
use PHPUnit\Framework\TestCase;

require_once "Question1Challenge.php";

class Question1ChallengeTest extends TestCase
{
    public function testQuestion1ChallengeTest()
    {
        $Question1Challenge = new Question1Challenge();
        $TestArray = ["ABAH", ["CIRCA"], ["CRUMP", ["IRA"]], ["ALI"]];
        $TestChar = 'ACI';

        $Test = $Question1Challenge->sum_deep($TestArray, $TestChar);

        $this->assertEquals(37, $Test);
    }
}

// run ./vendor/bin/phpunit --verbose .