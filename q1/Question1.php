<?php

class Question1
{
    public $counter = 0;
    public $level = 1;

    public function sum_deep($array, $char)
    {
        return $this->loop_tree($array, $this->level, $char);
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