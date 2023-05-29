<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    function view_tokens(Request $request) {

        // $url = "http://localhost:8000/";

        // $curl = curl_init($url);
        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // $headers = array(
        //     "Content-Type: application/json",
        // );
        // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($curl, CURLOPT_HEADER, true);
        // $response = curl_exec($curl);
        // curl_close($curl);


        // dd($response);
        $clients = Auth::user()->clients;

        return view('clients', ['clients'=>$clients]);

    }
}
