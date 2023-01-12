<?php

namespace model\webServices;
class Openweathermap{

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
        $this->$apiKey = $apiKey;
    }
}



/* api.openweathermap.org/data/2.5/forecast?lat=-&lon=&appid=8789a15340530a700025aa7fa791908a */
?>