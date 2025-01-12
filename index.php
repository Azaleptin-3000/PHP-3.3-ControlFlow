<?php
// Создаем массив из 5 чисел
$numbers = [10, 15, 22, 33, 40];

// Используем цикл foreach для проверки каждого числа
foreach ($numbers as $number) {
    // Проверяем, четное ли число
    if ($number % 2 == 0) {
        echo "Число $number — четное<br>";
    } else {
        echo "Число $number — нечетное<br>";
    }
}
?>

<?php
// Создаем массив из 7 чисел, включающих положительные и отрицательные значения
$numbers = [5, -3, 12, -9, 0, 8, -6];

// Инициализируем переменные для подсчета положительных и отрицательных чисел
$positiveCount = 0;
$negativeCount = 0;

// Используем цикл foreach для перебора чисел
foreach ($numbers as $number) {
    // Проверяем, положительное ли число
    if ($number > 0) {
        $positiveCount++;
    } elseif ($number < 0) {
        $negativeCount++;
    }
}

// Выводим количество положительных и отрицательных чисел
echo "Положительных чисел: $positiveCount<br>";
echo "Отрицательных чисел: $negativeCount<br>";
?>

<?php
// Внешний цикл для чисел от 5 до 10
for ($num = 5; $num <= 10; $num++) {
    echo "<div class='table-block'>";
    echo "<h3>Таблица умножения для $num</h3>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$num * $i = " . ($num * $i) . "</li>";
    }
    echo "</ul>";
    echo "</div>";
}
?>

<?php
// Создаем массив с именами студентов и их оценками
$students = [
    "Иван" => 85,
    "Мария" => 74,
    "Алексей" => 90,
];

// Используем цикл foreach для проверки каждой оценки
foreach ($students as $name => $score) {
    // Проверяем, сдал ли студент экзамен
    if ($score >= 50) {
        echo "$name сдал экзамен!<br>";
    } else {
        echo "$name не сдал экзамен!<br>";
    }
}
?>

<?php
// Создаем массив из 8 случайных чисел от 1 до 100
$numbers = [];
for ($i = 0; $i < 8; $i++) {
    $numbers[] = rand(1, 100); // Генерируем случайное число от 1 до 100
}

// Инициализируем переменные min и max значениями первого элемента массива
$min = $numbers[0];
$max = $numbers[0];

// Используем цикл foreach для нахождения минимального и максимального значений
foreach ($numbers as $number) {
    if ($number < $min) {
        $min = $number; // Обновляем минимальное значение
    }
    if ($number > $max) {
        $max = $number; // Обновляем максимальное значение
    }
}

// Выводим минимальное и максимальное значения
echo "Минимальное число: $min<br>";
echo "Максимальное число: $max<br>";
?>
