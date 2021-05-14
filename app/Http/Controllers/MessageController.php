<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use NewsController;


class MessageController extends Controller
{
    
    
    //https://www.treinaweb.com.br/blog/conhecendo-os-recursos-de-serializacao-json-do-laravel/
    public function messages ()
    {
        $title  =  NewsController::getNews();


        $json= [
            "test_mode" => true,
            "data" => [
                    
                    [
                        "phone" => "92992353995",
                        "message"=> $title,
                        "bot_id"=> 8454, //8455
                        "file"=> [
                        "url"=> "https://via.placeholder.com/400",
                        "name"=> "arquivo_exemplo.png",
                        "headers"=> [
                        "X-Custom-Header"=> "valor_custom_header",
                    ],
                  "optional"=> false,
                ],
                "meta"=> "Opcional - Não utilizado pelo Zapito"
            ]
        ]
            
    ];
       // $json::all();
        return $json;
    }


    //https://laravel.com/docs/5.8/api-authentication#passing-tokens-in-requests
    public function sendMessage( ){
              
        $newMessage = $this->messages();
    
        $token = config ('services.zapito.token');
        $url =config('services.zapito.url');
       
       
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->post($url ,$newMessage);
        
    
        echo $response->getStatusCode();
        echo $response->getBody();

    }

}
