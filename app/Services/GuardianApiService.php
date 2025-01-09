<?php

namespace App\Services;

use GuzzleHttp\Client;

class GuardianApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function fetchArticlesBySection($section)
    {
        $response = $this->client->request('GET', 'https://content.guardianapis.com/sections', [
            'query' => [
                'q' => $section,
                'api-key' => env('GUARDIAN_API_KEY'),   
            ]
        ]); 
        
    
        return json_decode($response->getBody(), true);
    }
}               