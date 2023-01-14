<?php
    //Autoload de classes
    require __DIR__.'/vendor/autoload.php';

    //Dependencias
    use \App\WebServices\OpenWeatherMap;

    //Instancia da api
    $obOpenWeatherMap = new OpenWeatherMap("8789a15340530a700025aa7fa791908a");
    
    if(!isset($argv[2])){
        die('Lat e Lon são obrigatórios');
    }
    $lat=$argv[1];
    $lon=$argv[2];

    $dadosPreciptacao = $obOpenWeatherMap->preciptation($lat,$lon);

    echo 'Lat: '.$lat.' Lon: '.$lon.'\n';

    echo 'Preciptacao' .($dadosPreciptacao['list']['pop'] ?? 'Desconhecido').'\n';
    
 