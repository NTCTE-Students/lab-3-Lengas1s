<?php
// Задание 5: Переворот массива

echo "<h2>Задание 5: Переворот массива</h2>";

$original_array = [10, 20, 30, 40, 50];

$reversed_array = array_reverse($original_array);

echo "<p>Исходный массив: ";
print_r($original_array);
echo "</p>";
echo "<p>Перевернутый массив: ";
print_r($reversed_array);
echo "</p>";

?>
