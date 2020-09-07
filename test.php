<?php
require_once 'dict.class.php';
$dict = new YandexDict('API_KEY');
#var_dump($dict->returnLagnuages()); // return supported languages en-ru ...etc

var_dump($dict->returnDictionary('en-ru','father')); // first parameter = language , second = word
