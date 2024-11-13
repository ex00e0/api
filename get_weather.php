<?php
// Ваш API-ключ

$apiKey = "15800c3022510d25a95fc0112c100499";

$get = $_GET['name'];
if ($get == 1) {
    $cityId = "479561";
}
else if ($get == 2) {
    $cityId = "524901";
}
else if ($get == 3) {
    $cityId = "554840";
}
else if ($get == 4) {
    $cityId = "2023469";
}
else if ($get == 5) {
    $cityId = "1489425";
}

// Формируем URL для запроса к API OpenWeatherMap
$url = "http://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&lang=ru&appid={$apiKey}";

// Выполняем запрос к API
$response = file_get_contents($url);

// Выводим полученные данные
echo $response;
?>
