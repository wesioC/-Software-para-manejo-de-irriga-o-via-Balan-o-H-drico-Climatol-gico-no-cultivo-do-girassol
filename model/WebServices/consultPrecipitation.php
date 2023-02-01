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
    $lat = $argv[1];
    $lon = $argv[2];

    $dadosPreciptacao = $obOpenWeatherMap->preciptation($lat,$lon);
    echo 'Lat: '.$lat.' Lon: '.$lon."\n\n";

    echo 'Data: ' .($dadosPreciptacao['list']['0']['dt_txt']?? 'Desconhecido')."\n";
    //echo 'Chuva: ' .($dadosPreciptacao['list']['0']['rain']['3h'].'mm'?? 'Desconhecido')."\n";
    echo 'Probabilidade: ' .(($dadosPreciptacao['list']['0']['pop']*100).'%'?? 'Desconhecido')."\n";    
    echo "\n\n";

    echo 'Data: ' .($dadosPreciptacao['list']['1']['dt_txt']?? 'Desconhecido')."\n";
    //echo 'Chuva: ' .($dadosPreciptacao['list']['1']['rain']['3h']?? 'Desconhecido')."\n";
    echo 'Probabilidade: ' .(($dadosPreciptacao['list']['1']['pop']*100).'%'?? 'Desconhecido')."\n";    
    echo "\n\n";

    echo 'Data: ' .($dadosPreciptacao['list']['2']['dt_txt']?? 'Desconhecido')."\n";
    //echo 'Chuva: ' .($dadosPreciptacao['list']['2']['rain']['3h']?? 'Desconhecido')."\n";
    echo 'Probabilidade: ' .(($dadosPreciptacao['list']['2']['pop']*100).'%'?? 'Desconhecido')."\n";    
    echo "\n\n";

   // print_r($dadosPreciptacao);40.84639167888714, -74.06476536616998