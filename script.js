// Функция для загрузки данных из PHP-файла
function loadMultiplicationTables() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'script.php', true); // Запрос к файлу script.php
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('multiplication-tables').innerHTML = xhr.responseText; // Вставляем полученный HTML
        }
    };
    xhr.send();
}

// Загружаем таблицу умножения при загрузке страницы
window.onload = function () {
    loadMultiplicationTables();
};
