<?php

class Speedometer
{
    private int $km;
    private int $miles;

    private const KM_To_Miles_Conversion = 0.621;

    public static function convert_km_to_miles(int $km)
    {
        return round($km * self::KM_To_Miles_Conversion, 2) . " " . "miles";
    }

    public static function convert_miles_to_km(int $miles)
    {
        return round($miles / self::KM_To_Miles_Conversion, 2) . " " . "km";
    }
}
