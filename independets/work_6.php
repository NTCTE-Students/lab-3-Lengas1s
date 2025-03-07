<?php
// Задание 6: Объединение массивов

echo "<h2>Задание 6: Объединение массивов</h2>";

$array1 = ["red", "green", "blue"];
$array2 = ["yellow", "orange", "purple"];

$merged_array = array_merge($array1, $array2);

echo "<p>Массив 1: ";
print_r($array1);
echo "</p>";
echo "<p>Массив 2: ";
print_r($array2);
echo "</p>";
echo "<p>Объединенный массив: ";
print_r($merged_array);
echo "</p>";

?>
