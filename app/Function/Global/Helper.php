<?php

if (!function_exists('convertPercentToDouble')) {
    function convertPercentToDouble($percent_number)
    {
        if ($percent_number <= 0) {
            throw new InvalidArgumentException('Percent Number Cannot be Lower than equal to zero:0');
        }

        return $percent_number/100;
    }
}

if (!function_exists('rupiahFormatter')) {
    function rupiahFormatter($number)
    {
        if ($number <= 0) {
            throw new InvalidArgumentException('Percent Number Cannot be Lower than equal to zero:0');
        }

        return number_format($number, 2, ',', '.');
    }
}
