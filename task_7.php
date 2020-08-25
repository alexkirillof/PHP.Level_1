<?php
$hours = date("g");
$minut = date("i");

function getHours($hours, $one = "час", $two = "часа", $free = "часов")
{


    if ($hours >= 2 && $hours <= 4) {
        return $two;
    } elseif ($hours === 1) {
        return $one;
    } elseif ($hours > 4 && $hours <= 12) {
        return $free;
    }
}

function getMinut($minut, $four = "минута", $five = "минуты", $six = "минут")
{

    $minut = abs($minut);


    if (($minut >= 2 && $minut <= 4) || ($minut >= 22 && $minut <= 24) || ($minut >= 32 && $minut <= 34) || ($minut >= 42 && $minut <= 44) || ($minut >= 52 && $minut <= 54)) {
        return $five;
    } elseif ($minut === 1 && $minut === 21 && $minut === 31 && $minut === 41 && $minut === 51) {
        return $four;
    } elseif (($minut > 4 && $minut <= 20) || ($minut > 24 && $minut <= 30) || ($minut > 34 && $minut <= 40) || ($minut > 44 && $minut <= 50) || ($minut > 54 || $minut <= 60)) {
        return $six;
    }
}

echo $hours  . getHours($hours, "час", "часа", "часов") . $minut  . getMinut($minut, "минута", "минуты", "минут");
