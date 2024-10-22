<?php
header('Content-Type: text/html; charset=utf-8'); // Указываем, что будем возвращать HTML

// Общий заголовок для таблицы умножения с классом
echo "<h3 class='multiplication-header'>Таблица умножения от 1 до 10</h3>"; // Заголовок h3

for ($num = 1; $num <= 10; $num++) {
    echo "<div class='table-block'>";
    echo "<h4>Х$num</h4>"; // Название блока х...
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$num * $i = " . ($num * $i) . "</li>";
    }
    echo "</ul>";
    echo "</div>";
}
?>