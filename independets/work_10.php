<?php
// Задание 10: Обработка многомерного массива

echo "<h2>Задание 10: Обработка многомерного массива</h2>";

$multi_dimensional_array = [
    ["Имя", "Возраст", "Город"],
    ["Иван", 30, "Москва"],
    ["Петр", 25, "Санкт-Петербург"],
    ["Анна", 28, "Казань"]
];

echo "<p>Многомерный массив:</p>";
echo "<pre>"; // Для форматированного вывода в HTML
print_r($multi_dimensional_array);
echo "</pre>";

echo "<h3>Табличное представление массива:</h3>";
echo "<table border='1'>";
foreach ($multi_dimensional_array as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
