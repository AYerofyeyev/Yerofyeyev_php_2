<?php
    $name = "Александр";
    $age = 'test';
    echo "Меня зовут {$name}. ";
    echo "<br>";
    echo "Мне {$age} лет. ";
    echo "<br>";
    if (!is_numeric($age)) {
        echo "В графу 'Возраст' введите число";
    } elseif ($age >= 18 && $age <= 59) {
        echo "Вам еще работать и работать";
    } elseif ($age > 59) {
        echo "Вам пора на пенсию";
    } elseif ($age >=0 && $age <= 17) {
        echo "Вам еще рано работать";
    } else {
        echo "Неизвестный возраст";
    }

?>
