<?php

class Question3
{
    public function pattern_count($text, $pattern)
    {
        $text_length = !empty($text) ? count(str_split($text)) : 0;
        $pattern_length = !empty($pattern) ? count(str_split($pattern)) : 0;
        $counter = 0;
        $i = 0;

        if ($text == '' || $pattern == '') {
            return $counter;
        }


        do {
            $text_substring = substr($text, $i, $pattern_length);
            $text_substring_length = !empty($text_substring) ? count(str_split($text_substring)) : 0;
            if ($text_substring == $pattern) {
                $counter += 1;
            }
            $i++;
        } while ($text_substring_length == $pattern_length);

        return $counter;
    }
}