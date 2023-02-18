<?php

abstract class Ship
{
    public $name;
    public $color;
    public $speed;

    public function __construct($name, $color, $speed) {
        $this->name = $name;
        $this->color = $color;
        $this->speed = $speed;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_color()
    {
        return $this->color;
    }

    public function get_speed()
    {
        return $this->speed;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function set_speed($speed)
    {
        $this->speed = $speed;
    }

    abstract public function accelerate();
}