<?php
// Задание 2: Поиск максимального и минимального значения

echo "<h2>Задание 2: Поиск максимального и минимального значения</h2>";

$numbers = [5, 1, 8, 2, 9, 4];

$min = min($numbers);
$max = max($numbers);

echo "<p>Массив: ";
print_r($numbers);
echo "</p>";
echo "<p>Минимальное значение: <strong>" . $min . "</strong></p>";
echo "<p>Максимальное значение: <strong>" . $max . "</strong></p>";

?>
