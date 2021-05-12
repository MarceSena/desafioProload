<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class GetMessageController extends Controller
{       
        //https://laravel.com/docs/8.x/http-client
        //https://laravel.com/docs/5.8/api-authentication#passing-tokens-in-requests
       public  function conectAPI(){
            $client = new Client();
            $url = "https:/zapito.com.br/api/bots";
            $token= 'RMMYWnAG7cxUmHYncqb727nYl8PBNUYdVvPc6YdOzmIue8tTDsYqoj1xWhF0';

            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer '.$token,
                    'Accept' => 'application/json',
                ],
                
            ]);
           
        
            $responseBody = json_decode($response->getBody());

            dd( $responseBody);

       }
       public function newMessage(Request $request){
        //https://laravel.com/docs/8.x/http-client
        
        $token= 'RMMYWnAG7cxUmHYncqb727nYl8PBNUYdVvPc6YdOzmIue8tTDsYqoj1xWhF0';
        $url = "https:/zapito.com.br/api/message";

        $request = Http::withToken($token)->post($url, [
                    "phone" => "11900000000",
                    "message" => "Mensagem de teste 1",
                    "test_mode" => true
                ]);
               
            $ui = $request->url();
               
            dd( $ui);
           
           
            
           
       }
    

    
}
