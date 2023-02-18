<?php
use PHPUnit\Framework\TestCase;

require_once "Question1.php";

class Question1Test extends TestCase
{
    public function testQuestion1Test1()
    {
        $Question1_1 = new Question1();
        $TestArray1 = ["AB", ["XY"], ["YP"]];
        $TestChar1 = 'Y';

        $Test1 = $Question1_1->sum_deep($TestArray1, $TestChar1);

        $this->assertEquals(4, $Test1);
    }

    public function testQuestion1Test2()
    {
        $Question1_2 = new Question1();
        $TestArray2 = ["", ["", ["XXXXX"]]];
        $TestChar2 = 'X';

        $Test2 = $Question1_2->sum_deep($TestArray2, $TestChar2);

        $this->assertEquals(3, $Test2);
    }

    public function testQuestion1Test3()
    {
        $Question1_3 = new Question1();
        $TestArray3 = ["X"];
        $TestChar3 = 'X';

        $Test3 = $Question1_3->sum_deep($TestArray3, $TestChar3);

        $this->assertEquals(1, $Test3);
    }

    public function testQuestion1Test4()
    {
        $Question1_4 = new Question1();
        $TestArray4 = [""];
        $TestChar4 = 'X';

        $Test4 = $Question1_4->sum_deep($TestArray4, $TestChar4);

        $this->assertEquals(0, $Test4);
    }

    public function testQuestion1Test5()
    {
        $Question1_5 = new Question1();
        $TestArray5 = ["X", ["", ["", ["Y"], ["X"]]], ["X", ["", ["Y"], ["Z"]]]];
        $TestChar5 = 'X';

        $Test5 = $Question1_5->sum_deep($TestArray5, $TestChar5);

        $this->assertEquals(7, $Test5);
    }

    public function testQuestion1Test6()
    {
        $Question1_6 = new Question1();
        $TestArray6 = ["X", [""], ["X"], ["X"], ["Y", [""]], ["X"]];
        $TestChar6 = 'X';

        $Test6 = $Question1_6->sum_deep($TestArray6, $TestChar6);

        $this->assertEquals(7, $Test6);
    }
}

// run ./vendor/bin/phpunit --verbose .