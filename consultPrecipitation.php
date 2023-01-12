<?php
    require __DIR__.'/vendor/autoload.php';
    use \App\WebServices\OpenWeatherMap;

    $obOpenWeatherMap = new OpenWeatherMap("8789a15340530a700025aa7fa791908a");
    
    echo "<pre>";
    print_r($obOpenWeatherMap);
    echo "</pre>"; exit;