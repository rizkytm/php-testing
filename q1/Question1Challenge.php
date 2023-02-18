<?php

class Question1Challenge
{
    public $counter = 0;
    public $level = 1;

    public function sum_deep($array, $char)
    {
        $total = 0;
        $string_array = str_split($char);
        foreach($string_array as $idx => $c) {
            $this->counter = 0;
            $sum_c = $this->loop_tree($array, 1, $c);
            $total += $sum_c * ($idx + 1);
        }
        return $total;
    }

    public function loop_tree($array, $level, $char)
    {
        foreach($array as $index => $node) {
            if (gettype($node) == 'array') {
                $this->loop_tree($node, $level + 1, $char);
            } else {
                if (strpos($node, $char) !== false) {
                    $this->counter += $level;
                }
            }
        }
        return $this->counter;
    }
}
?>