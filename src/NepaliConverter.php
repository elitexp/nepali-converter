<?php

namespace Elitexp\NepaliConverter;


/**
 * Class NepaliConverter
 * @package Elitexp\NepaliConverter
 */

class NepaliConverter
{
    protected $englishWords = [];
    protected $englishDigits = [];

    public function __construct()
    {
        $this->englishWords = ['', "Hundred", "Thousand", "Lakh", "Crore", "Arab", "Kharab"];
        $this->englishDigits = [
            0 => "Zero",
            1 => "One",
            2 => "Two",
            3 => "Three",
            4 => "Four",
            5 => "Five",
            6 => "Six",
            7 => "Seven",
            8 => "Eight",
            9 => "Nine",
            10 => "Ten",
            11 => "Eleven",
            12 => "Twelve",
            13 => "Thirteen",
            14 => "Fourteen",
            15 => "Fifteen",
            16 => "Sixteen",
            17 => "Seventeen",
            18 => "Eighteen",
            19 => "Nineteen",
            20 => "Twenty",
            30 => "Thirty",
            40 => "Forty",
            50 => "Fifty",
            60 => "Sixty",
            70 => "Seventy",
            80 => "Eighty",
            90 => "Ninety"

        ];
    }


    public function numberToWords($number, $currency = false)
    {

        $no = round($number);
        $point = round($number - $no, 2) * 100;
        $hundred = null;
        $digits_1 = strlen($no);
        $i = 0;
        $str = array();
        while ($i < $digits_1) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += ($divider == 10) ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                $str [] = ($number < 21) ? $this->englishDigits[$number] . " " . $this->englishWords[$counter] . $plural . " " . $hundred : $this->englishDigits[floor($number / 10) * 10] . " " . $this->englishDigits[$number % 10] . " " . $this->englishDigits[$counter] . $plural . " " . $hundred;
            } else {
                $str[] = null;
            }
        }
        $str = array_reverse($str);
        $result = implode('', $str);
        $points = ($point) ? ". " . $this->englishWords[$point / 10] . " " . $this->englishDigits[$point = $point % 10] : '';
        return $result . " And " . $point . "/ 100";
    }
}
