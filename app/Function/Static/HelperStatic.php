<?php

namespace App\Function\Static;

use InvalidArgumentException;

class HelperStatic
{
    public static function convertPercentToDouble($percent_number)
    {
        return convertPercentToDouble($percent_number);
    }

    public static function rupiahFormatter($number)
    {
        return rupiahFormatter($number);
    }

    public static function convertDoubleToPercent($double_number)
    {
        return convertDoubleToPercent($double_number);
    }
}
