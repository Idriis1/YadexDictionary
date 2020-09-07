<?php
/* wrote by idriis */
class YandexDict{

    const ENDPOINT = 'https://dictionary.yandex.net/api/v1/dicservice.json/';
    private $API_KEY;

    public function __construct($API){
      $this->API_KEY = $API;
    }
    // return an array contain languages getLangs
    public function returnLagnuages(){
      return $this->returnResultByMethod('getLangs');
    }

    public function returnDictionary($lang,$word){
      return $this->returnResultByMethod('lookup',['lang'=>$lang,'text'=>$word]);
    }
    private function returnResultByMethod($method,$parameters = []){
      $parameters['key'] = $this->API_KEY;
      $URL = SELF::ENDPOINT.$method.'?'.http_build_query($parameters);
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $URL);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      #return json_decode(curl_exec($ch),1);
      return json_decode(curl_exec($ch));
    }

}
