<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostbackController extends Controller
{
    protected $baseUrl;
    protected $token;

    public function __construct()
    {
        $this->baseUrl = config('postback.api_url');
        $this->token = config('postback.api_token');
    }

    public function getNumber(Request $request)
    {
        $response = Http::get($this->baseUrl, [
            'action' => 'getNumber',
            'country' => $request->input('country', 'se'),
            'service' => $request->input('service', 'wa'),
            'token' => $this->token,
            'rent_time' => $request->input('rent_time'),
        ]);

        return response()->json($response->json());
    }

    public function getSms(Request $request)
    {
        $response = Http::get($this->baseUrl, [
            'action' => 'getSms',
            'activation' => $request->input('activation'),
            'token' => $this->token,
        ]);

        return response()->json($response->json());
    }

    public function cancelNumber(Request $request)
    {
        $response = Http::get($this->baseUrl, [
            'action' => 'cancelNumber',
            'activation' => $request->input('activation'),
            'token' => $this->token,
        ]);

        return response()->json($response->json());
    }

    public function getStatus(Request $request)
    {
        $response = Http::get($this->baseUrl, [
            'action' => 'getStatus',
            'activation' => $request->input('activation'),
            'token' => $this->token,
        ]);

        return response()->json($response->json());
    }
}
