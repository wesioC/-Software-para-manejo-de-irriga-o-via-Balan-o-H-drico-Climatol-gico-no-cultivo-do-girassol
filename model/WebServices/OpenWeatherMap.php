<?php

namespace App\WebServices;
class OpenWeatherMap{

    /**
     * URL base da API
     */
    const BASE_URL = 'https://api.openweathermap.org';
   
     /**
     * ApiKey do email: wesio.coelho@estudante.ifgoiano.edu.br
     * Name: softweregirassol
     */
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function preciptation($lat,$lon){
        return $this->get('/data/2.5/forecast',['lat'=>$lat,'lon'=>$lon]);
    }
    private function get($resource,$params = []){
        $params['units'] = 'metric';
        $params['lang'] = 'pt_br';
        $params['appid'] = $this->apiKey;
    
        $endpoint = self::BASE_URL.$resource.'?'.http_build_query($params);

        $curl = curl_init();
        
        curl_setopt_array($curl,[
        CURLOPT_URL => $endpoint,
        CURLOPT_RETURNTRANSFER =>true,
        CURLOPT_CUSTOMREQUEST => 'GET'
        ]);
        
        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response,true);
    }
    

}



/* api.openweathermap.org/data/2.5/forecast?lat=-&lon=&appid=8789a15340530a700025aa7fa791908a */
