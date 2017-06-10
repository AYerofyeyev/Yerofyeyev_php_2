<?php
    echo "<h1>Калькулятор</h1>";
    echo "<form action='15.php' target='_self'>";
    echo "<input type='text' name='a' placeholder='Введите первое число'>";
    echo "<br>";
    echo "<input type='text' name='b' placeholder='Введите второе число'>";
    echo "<br>";

    echo "<select name='operator'>";

    echo "<option>";
    echo "+";
    echo "</option>";

    echo "<option>";
    echo "-";
    echo "</option>";

    echo "<option>";
    echo "*";
    echo "</option>";

    echo "<option>";
    echo "/";
    echo "</option>";

    echo "<option>";
    echo "%";
    echo "</option>";
    echo "</select>";
    echo "<br>";

    echo "<input type='submit' value='Результат: '>";
    echo "</form>";

    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $operator = $_REQUEST['operator'];

    if ($operator == '/' | $operator == '%' && $b == 0){
        echo "На ноль делить нельзя!";
    } else {

        switch ($operator) {
            case '+':
            $result = $a + $b;
            break;

            case '-':
            $result = $a - $b;
            break;

            case '*':
            $result = $a * $b;
            break;

            case '/':
            $result = $a / $b;
            break;

            case '%':
            $result = $a % $b;
            break;
        }
        echo "{$a} {$operator} {$b} = {$result}";
    }

?>
