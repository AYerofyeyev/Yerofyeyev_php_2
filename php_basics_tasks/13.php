<?php
    $s = 100;
    $t = 1;
    $speed_hours = $s / $t;
    echo "{$speed_hours}";
    echo "km/h or ";
    $speed_seconds = ($s * 1000) / ($t * 3600);
    echo "{$speed_seconds}";
    echo "m/s";
?>
