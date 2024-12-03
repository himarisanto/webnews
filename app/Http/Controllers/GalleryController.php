<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GalleryController extends Controller
{
    public function index()
    {
        $accessToken = env('INSTAGRAM_ACCESS_TOKEN');
        $userId = env('INSTAGRAM_USER_ID');

        $endpoint = "https://graph.instagram.com/{$userId}/media?fields=id,caption,media_type,media_url&access_token={$accessToken}";

        try {
            $client = new Client();
            $response = $client->get($endpoint);
            $data = json_decode($response->getBody(), true);

            $photos = array_filter($data['data'], function ($item) {
                return $item[''] === 'IMAGE';
            });

            return view('foto', ['photos' => $photos]);

        } catch (\Exception $e) {
            return view('foto', ['photos' => [], 'error' => $e->getMessage()]);
        }
    }
}
