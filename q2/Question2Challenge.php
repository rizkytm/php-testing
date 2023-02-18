<?php

class Question2Challenge
{
    public function get_scheme($str)
    {
        $sc_only_tag_array = $this->extract_sc_only_tag($str);
        $props_value_array = $this->extract_props_value($sc_only_tag_array);
        $result_array = $this->combine_props_value($props_value_array);

        return $result_array[0];
    }

    public function combine_props_value($array)
    {
        for ($i = count($array) - 1; $i > 0; $i--) {
            $item = $array[$i];
            unset($array[$i]);
            array_push($array[$i - 1], $item);
        }

        return $array;
    }

    public function extract_props_value($array)
    {
        $props_value_array = array();
        foreach($array as $item) {
            $item_array = explode(" ", $item);
            $array_tag = array();
            foreach($item_array as $it) {
                if (strpos($it, 'sc-') !== false) {
                    $it = str_replace('sc-', '', $it);
                    if (strpos($it, '=') !== false) {
                        $props_array = explode("=", $it);
                        $props = $props_array[0];
                        $value = str_replace('"', '', $props_array[1]);
                    } else {
                        $props = str_replace('sc-', '', $it);
                        $value = '';
                    }
                    $props_object = array(
                        $props => $value,
                    );
                    array_push($array_tag, $props_object);
                }
            }
            array_push($props_value_array, $array_tag);
        }

        return $props_value_array;
    }

    public function extract_sc_only_tag($str)
    {
        $sc_only_tag_array = array();
        $start_index = 0;
        $end_index = strlen($str);
        for($i=0; $i<strlen($str); $i++) {
            if ($str[$i] == '<') {
                $start_index = $i;
            } else if ($str[$i] == '>') {
                $end_index = $i;
                $substr = substr($str, $start_index, ($end_index - $start_index + 1));
                if (strpos($substr, 'sc-') !== false) {
                    $substr = str_replace('</', ' ', $substr);
                    $substr = str_replace('<', ' ', $substr);
                    $substr = str_replace('>', ' ', $substr);
                    array_push($sc_only_tag_array, $substr);
                }
            }
        }

        return $sc_only_tag_array;
    }
}