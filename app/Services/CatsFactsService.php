<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class CatsFactsService
{

    public function getRandomCatFact()
    {
        try {
            $response = Http::get('https://meowfacts.herokuapp.com/?lang=ukr');
            $data =  collect(json_decode($response->body()));

            return $data['data'][0];
        } catch (\Exception $e) {
            return null;
        }
    }
}