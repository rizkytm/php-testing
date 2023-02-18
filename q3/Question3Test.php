<?php
use PHPUnit\Framework\TestCase;

require_once "Question3.php";

class Question3Test extends TestCase
{
    public function testQuestion3Test1()
    {
        $Question3 = new Question3();
        $Text = "palindrom";
        $Pattern = "ind";
        $ExpectedResult = 1;

        $Test = $Question3->pattern_count($Text, $Pattern);

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testQuestion3Test2()
    {
        $Question3 = new Question3();
        $Text = "abakadabra";
        $Pattern = "ab";
        $ExpectedResult = 2;

        $Test = $Question3->pattern_count($Text, $Pattern);

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testQuestion3Test3()
    {
        $Question3 = new Question3();
        $Text = "hello";
        $Pattern = "";
        $ExpectedResult = 0;

        $Test = $Question3->pattern_count($Text, $Pattern);

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testQuestion3Test4()
    {
        $Question3 = new Question3();
        $Text = "ababab";
        $Pattern = "aba";
        $ExpectedResult = 2;

        $Test = $Question3->pattern_count($Text, $Pattern);

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testQuestion3Test5()
    {
        $Question3 = new Question3();
        $Text = "aaaaaa";
        $Pattern = "aa";
        $ExpectedResult = 5;

        $Test = $Question3->pattern_count($Text, $Pattern);

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testQuestion3Test6()
    {
        $Question3 = new Question3();
        $Text = "hell";
        $Pattern = "hello";
        $ExpectedResult = 0;

        $Test = $Question3->pattern_count($Text, $Pattern);

        $this->assertEquals($ExpectedResult, $Test);
    }
}

// run ./vendor/bin/phpunit --verbose .