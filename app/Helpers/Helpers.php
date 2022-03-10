<?php

namespace App\Helpers;

class Helpers
{
    public static function similarityPercentage(string $str1, string $str2)
    {
        return (similar_text($str1, $str2)*100)/max(strlen($str1), strlen($str2));
    }
}
