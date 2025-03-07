<?php
// Задание 7: Разбиение строки на массив

echo "<h2>Задание 7: Разбиение строки на массив</h2>";

$string = "Это строка из нескольких слов";
$words_array = explode(" ", $string);

echo "<p>Исходная строка: <strong>" . $string . "</strong></p>";
echo "<p>Массив слов: ";
print_r($words_array);
echo "</p>";

?>
