<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Message;
use App\Models\News;
use App\Models\Client;
use Illuminate\Support\Facades\DB;



class MessageController extends Controller
{
    //pegar dados
    
    //https://www.treinaweb.com.br/blog/conhecendo-os-recursos-de-serializacao-json-do-laravel/
    public function message()
    {
   
    $news = DB::table('news')->get();
    $client = DB::table('clients')->get();


    foreach ($client as $clientonsult) {
        foreach ($news as $newsConsult) {
            $newMessage = [
                "test_mode" => true,
                "data" => [
                        
                        [
                            "phone" => $clientonsult->phone,
                            "message"=> "ola { $clientonsult->name} \n essa noticia parece importante para voce: {$newsConsult->title} \n segue o link {$newsConsult->link}",
                            "bot_id"=> $id_bot , //8455
                        ]
                ]
                
            ];

        }
    
        return $newMessage;
    }
       
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
