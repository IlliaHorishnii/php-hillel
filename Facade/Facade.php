<?php
namespace Facade;

class Facade
{
    private string $api;

    public function __construct($url)
    {
        $this->api = $url;
    }

    public function apiConnect($mode, $word)
    {
        $curl = curl_init('www/Facade/MyApi.php');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, [
            'mode' => $mode,
            'word' => $word]
        );

        $result = curl_exec($curl);
        curl_close($curl);
        
        return $this->apiResult($result);
    }

    public function apiResult($result)
    {
        return json_decode($result);
    }
}
