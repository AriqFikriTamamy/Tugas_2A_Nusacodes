<?php
if (isset($_POST["count"])) {
    $number_1 = $_POST["number1"];
    $number_2 = $_POST["number2"];
    $operator = $_POST["operation"];
    switch ($operator) {
        case "plus":
            $result = $number_1 + $number_2;
            break;
        case "minus":
            $result = $number_1 - $number_2;
            break;
        case "cross":
            $result = $number_1 * $number_2;
            break;
        case "divide":
            $result = $number_1 / $number_2;
            break;
    }
}
?>