<?php

class Question2
{
    public function get_scheme($str)
    {
        $str = str_replace('</', ' ', $str);
        $str = str_replace('<', ' ', $str);
        $str = str_replace('>', ' ', $str);

        $array = explode(" ", $str);

        $sc_array = array();
        foreach($array as $item) {
            if (strpos($item, 'sc-') !== false) {
                array_push($sc_array, $item);
            }
        }

        $result_array = array();
        foreach($sc_array as $item) {
            $str = str_replace('sc-', '', $item);
            array_push($result_array, $str);
        }

        return $result_array;
    }
}