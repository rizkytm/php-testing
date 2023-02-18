<?php

require_once "Ship.php";

class MotorBoat extends Ship
{
    public function accelerate()
    {
        echo 'brum...';
    }
}