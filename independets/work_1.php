<?php
// Задание 1: Сумма элементов массива

echo "<h2>Задание 1: Сумма элементов массива</h2>";

$numbers = [1, 2, 3, 4, 5];
$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

echo "<p>Массив: ";
print_r($numbers);
echo "</p>";
echo "<p>Сумма элементов массива: <strong>" . $sum . "</strong></p>";

?>
