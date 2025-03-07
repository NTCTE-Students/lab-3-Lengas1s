<?php
// Задание 8: Сортировка массива

echo "<h2>Задание 8: Сортировка массива</h2>";

$numbers_to_sort = [3, 1, 4, 1, 5, 9, 2, 6];

$ascending_array = $numbers_to_sort; // Копируем массив, чтобы не менять исходный
sort($ascending_array);

$descending_array = $numbers_to_sort; // Копируем массив снова
rsort($descending_array);

echo "<p>Исходный массив: ";
print_r($numbers_to_sort);
echo "</p>";
echo "<p>Массив, отсортированный по возрастанию: ";
print_r($ascending_array);
echo "</p>";
echo "<p>Массив, отсортированный по убыванию: ";
print_r($descending_array);
echo "</p>";

?>
