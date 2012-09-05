<?php
class PushNotification{
    function push(){
        $url = "https://api.parse.com/1/push";

        $data = '{
               "channel":"",
               "type":"ios",
               "data" : {"alert":"新着アプリが更新されました", "sound":"default"}
        }';

        $header = array(
            "X-Parse-Application-Id:your-id-here",
            "X-Parse-REST-API-Key:your-key-here",
            "Content-Type:application/json",
        );

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_exec($curl);
        curl_close($curl);
    }
}



?>