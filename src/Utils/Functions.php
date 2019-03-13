<?php

namespace Forseti\Bot\Fiergs\Utils;


class Functions
{
    public static function format($date, $padrao = "Y-m-d H:i:s")
    {
        $date = preg_replace('/\/Date\(|\)\//', '', $date);

        if($date > 0) {
            return date($padrao, $date / 1000);
        }

        return null;
    }
}