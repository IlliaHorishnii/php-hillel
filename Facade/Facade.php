<?php
namespace Facade;

class Facade
{
    public const DEFAULT_API_URL = 'www/Facade/MyApi.php';
    private string $apiUrl;
    private array $data;

    public function __construct($url = self::DEFAULT_API_URL, $data)
    {
        $this->apiUrl = $url;
        $this->data = $data;
    }

    public function apiConnect()
    {
        $curl = curl_init($this->apiUrl);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->data);

        $result = curl_exec($curl);
        curl_close($curl);

        return $this->apiResult($result);
    }

    private function apiResult($result)
    {
        return json_decode($result);
    }

}
