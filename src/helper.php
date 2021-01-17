<?php

if (!function_exists('banglaNumber')) {

    /**
     * Get bangle number from english number
     *
     * @param $number
     * @return string
     */
    function banglaNumber($number) :string
    {
        $bnNumber = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
        $enNumber = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
        return str_replace($enNumber, $bnNumber, $number);
    }
}
