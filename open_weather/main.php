<?php

echo "Sveicināti mūsu laikapstākļu aplikācijā!" . PHP_EOL;

$apiKey = "ApiKey";
$cityName = readline("Ievadiet pilsētu: ");
$response = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q={$cityName}&lang=la&appid={$apiKey}&units=metric");

if ($response === false) {
    echo "---------------------------------------------------------------------" . PHP_EOL;
    echo "Something went wrong!" . PHP_EOL;
    echo "---------------------------------------------------------------------" . PHP_EOL;
    exit;
}

$cityData = json_decode($response);

echo "---------------------------------------------------------------------" . PHP_EOL;
echo "Laikapstākļi pilsētā $cityName:" . PHP_EOL;
echo "* Gaisa temperatūra: {$cityData->main->temp} C, pēc sajūtām {$cityData->main->feels_like} C" . PHP_EOL;
echo "* Ārā {$cityData->weather[0]->description} " . PHP_EOL;
echo "* Gaisa spiediens: {$cityData->main->pressure} h/pa" . PHP_EOL;
echo "* Gaisa mitrums: {$cityData->main->humidity} %" . PHP_EOL;
echo "* Redzamība: {$cityData->visibility} m" . PHP_EOL;
echo "* Vēja ātrums: {$cityData->wind->speed} m/s" . PHP_EOL;