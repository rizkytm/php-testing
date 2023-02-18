<?php
use PHPUnit\Framework\TestCase;

require_once "MotorBoat.php";
require_once "SailBoat.php";
require_once "Yatch.php";

class Test extends TestCase
{
    public function testMotorBoat()
    {
        $MotorBoat = new MotorBoat('BMW', 'red', 80);
        $ExpectedResult = 'BMW';

        $Test = $MotorBoat->get_name();

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testSailBoat()
    {
        $SailBoat = new SailBoat('BMW', 'red', 80);
        $ExpectedResult = 'red';

        $Test = $SailBoat->get_color();

        $this->assertEquals($ExpectedResult, $Test);
    }

    public function testYatch()
    {
        $Yatch = new Yatch('BMW', 'red', 80);
        $ExpectedResult = 80;

        $Test = $Yatch->get_speed();

        $this->assertEquals($ExpectedResult, $Test);
    }
}