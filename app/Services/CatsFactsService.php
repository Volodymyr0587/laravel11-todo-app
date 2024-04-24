<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


class CatsFactsService
{

    public function getRandomCatFact()
    {
        $cacheKey = 'random_cat_fact';

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        try {
            $response = Http::get('https://meowfacts.herokuapp.com/?lang=ukr');
            $data =  collect(json_decode($response->body()));

            $randomFact = $data['data'][0];

            // Cache the data for 1 hour (you can adjust the expiration time as needed)
            Cache::put($cacheKey, $randomFact, now()->addMinute());

            return $randomFact;
        } catch (\Exception $e) {
            return null;
        }
    }
}