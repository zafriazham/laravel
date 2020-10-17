<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WebController extends Controller
{
    public function displayData()
    {
        $client = new Client;

        $response = $client->get(
            'https://api.met.gov.my/v2/data?datasetid=FORECAST&datacategoryid=GENERAL&locationid=LOCATION:237&start_date=2020-10-17&end_date=2020-10-17',
            // config('staticdata.mett_weather_api'),
            [
                'headers' => [
                    'Authorization' => 'METToken '. config('staticdata.mett_token_api'),
                ],
            ]
        );

        // dd($response->getBody()->getContents());

        $data = 123;
        return view('welcome', ['data' => $response->getBody()->getContents()]);
    }
}
