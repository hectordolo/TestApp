<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;



    public function authenticated(Request $request){

        $client = new Client([
            'base_uri' => config('services.coreapi.client_url'),
        ]);

        $response = $client->request('POST','/v1/oauth/token', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'form_params' => [
                'grant_type' => "client_credentials",
                'client_id' => config('services.coreapi.client_id'),
                'client_secret' => config('services.coreapi.client_secret'),
            ],
        ]);


        $content = json_decode($response->getBody()->getContents(),true);

        $request->session()->put('logo', $content['access_token']);

        return back();
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
