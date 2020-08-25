<?php
$val = 3;
$pow = 5;
function involve($val, $pow)
{
        if ($pow === 1) {
                return $val;
        } else {
                return $val * involve($val, $pow - 1);
        }
}
echo involve($val, $pow);
