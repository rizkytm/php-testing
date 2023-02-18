<?php
use PHPUnit\Framework\TestCase;

require_once "Question2.php";

class Question2Test extends TestCase
{
    public function testQuestion2Test1()
    {
        $Question2 = new Question2();
        $TestString = "<i sc-root>Hello</i>";
        $ExpectedResult = ["root"];

        $Test = $Question2->get_scheme($TestString);

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testQuestion2Test2()
    {
        $Question2 = new Question2();
        $TestString = '<div><div sc-rootbear title="Oh My">Hello <i sc-org>World</i></div></div>';
        $ExpectedResult = ["rootbear", "org"];

        $Test = $Question2->get_scheme($TestString);

        $this->assertEquals($ExpectedResult, $Test);
    }
}

// run ./vendor/bin/phpunit --verbose .