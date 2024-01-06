<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
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
    public function index()
    {
        $client = new Client();
        
        try {
            $response = $client->request('GET', 'http://127.0.0.1:8000/api/users');
            $users = json_decode($response->getBody()->getContents())->data;
        } catch (\Exception $e) {
            // Manejar errores de solicitud, como la API no está disponible
            $users = [];
        }
        
        return view('home', compact('users'));
        //return view('home');
    }
}
