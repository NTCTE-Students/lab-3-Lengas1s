<?php
// Задание 4: Удаление дубликатов

echo "<h2>Задание 4: Удаление дубликатов</h2>";

$array_with_duplicates = ["a", "b", "c", "b", "d", "a", "e"];

$unique_array = array_unique($array_with_duplicates);

echo "<p>Массив с дубликатами: ";
print_r($array_with_duplicates);
echo "</p>";
echo "<p>Массив без дубликатов: ";
print_r($unique_array);
echo "</p>";

?>
