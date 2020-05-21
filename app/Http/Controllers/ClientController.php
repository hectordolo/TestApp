<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $client = new GuzzleClient([
            'base_uri' => config('services.coreapi.client_url'),
        ]);

        $response = $client->request('POST','/v1/client', [
            'headers' => [
                'Authorization' => 'Bearer '. $request->session()->get('logo'),
            ],
            'json'    => [
                'method' => 'index',
                'data'   => [
                    "search" => "",
                    "show" => "15",
                    "page" => ""
                ]
            ],
        ]);

        $content = json_decode($response->getBody()->getContents(),true);

        $data = $content['data']['results']['data'];

        return view('client.index',compact('data'));
    }
}
