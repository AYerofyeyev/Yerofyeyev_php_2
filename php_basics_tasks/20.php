<?php
    $a = 20;
    $b = 0;
    $c = -20;
    echo "\$a = {$a}, \$b = {$b},\$c = {$c}";
    echo "<br>";
    var_dump((bool)$a, (bool)$b, (bool)$c);
    echo "<br>";
    echo "Любое число, отличное от 0, приводится к true";
?>
