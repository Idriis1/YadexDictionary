# YadexDictionary
Simple class handler Yandex Dictionary API 

## API
[Create API Here](https://yandex.com/dev/dictionary/keys/get/) | 
[Documentation](https://yandex.com/dev/dictionary/doc/dg/concepts/About-docpage/)

## Usage

example :
```
<?php
require_once 'dict.class.php';
$dict = new YandexDict('API_KEY');
#var_dump($dict->returnLagnuages()); // return supported languages en-ru ...etc
$dict->returnDictionary('en-ru','father'); // first parameter = language , second = word
?>
```

All result return as json , if you want associative array uncomment `#return json_decode(curl_exec($ch),1);` and remove/comment `return json_decode(curl_exec($ch));`
