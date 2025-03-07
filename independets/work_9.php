<?php
// Задание 9: Поиск элемента в массиве

echo "<h2>Задание 9: Поиск элемента в массиве</h2>";

$search_array = ["apple", "banana", "cherry", "date"];
$element_to_find = "cherry";
$element_not_found = "grape";

// Поиск существующего элемента
$index_found = array_search($element_to_find, $search_array);
if ($index_found !== false) {
    echo "<p>Массив: ";
    print_r($search_array);
    echo "</p>";
    echo "<p>Элемент <strong>'" . $element_to_find . "'</strong> найден под индексом: <strong>" . $index_found . "</strong></p>";
} else {
    echo "<p>Элемент <strong>'" . $element_to_find . "'</strong> не найден в массиве.</p>";
}

// Поиск несуществующего элемента
$index_not_found = array_search($element_not_found, $search_array);
if ($index_not_found !== false) {
    echo "<p>Элемент <strong>'" . $element_not_found . "'</strong> найден под индексом: <strong>" . $index_not_found . "</strong></p>";
} else {
    echo "<p>Элемент <strong>'" . $element_not_found . "'</strong> не найден в массиве.</p>";
}


?>
