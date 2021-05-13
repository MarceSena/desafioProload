<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class MessageController extends Controller
{
    //https://laravel.com/docs/5.8/api-authentication#passing-tokens-in-requests
    public function sendMessage(){

        $token = config ('services.zapito.token');
        $url =config('services.zapito.url');
       
        $json= [
                "test_mode" => true,
                "data" => [
                        [
                            "phone" => "11900000000",
                            "message" => "Mensagem de teste 1",
                            "test_mode"=> true
                        ],
                        [
                            "phone" => "5511901234567",
                            "message"=> "Olá mundo!\n *Negrito* _itálico_ e EMOJIs: 🤖",
                            "bot_id"=> 42,
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

       
        
        

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->post($url, [
            "test_mode" => true,
                "data" => [
                        [
                            "phone" => "11900000000",
                            "message" => "Mensagem de teste 1",
                            "test_mode"=> true
                        ],
                        [
                            "phone" => "5511901234567",
                            "message"=> "Olá mundo!\n *Negrito* _itálico_ e EMOJIs: 🤖",
                            "bot_id"=> 42,
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

        ]);
        
        
        echo $response->getStatusCode();
        echo $response->getBody();
        


    }

}
