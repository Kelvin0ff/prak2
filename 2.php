<?php
echo "Выполнил работу Петров Илья П-23\n";
echo "Введите длину первой стороны: ";
$a = readline();
echo "Введите длину второй стороны: ";
$b = readline();
echo "Введите длину третьей стороны: ";
$c = readline();
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    if ($a == $b && $b == $c) {
        echo "Равносторонний треугольник.";
    }
    else if ($a == $b || $a == $c || $b == $c) {
        echo "Равнобедренный треугольник.";
    }
    else {
        echo "Разносторонний треугольник.";
    }
} else {
    echo "Треугольник с такими сторонами не существует.";
}
