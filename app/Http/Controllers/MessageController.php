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
    
    
    //https://www.treinaweb.com.br/blog/conhecendo-os-recursos-de-serializacao-json-do-laravel/
    public function message()
    {
    $news = DB::table('news')->get();
    $client = DB::table('clients')->get();
    $count = 0;
    foreach ($client as $clientonsult) {
        foreach ($news as $newsConsult) {
            $newMessage = [
                "test_mode" => true,
                "data" => [
                        
                        [
                            "phone" => $clientonsult->phone,
                            "message"=> "Ola {$clientonsult->name} \n Essa noticia parece importante para voce: \n {$newsConsult->title} \n segue o link {$newsConsult->link}",
                            "bot_id"=> 8455 , //8455
                        ]
                ]
                
            ];    
        }
        
        $token = config ('services.zapito.token');
        $url =config('services.zapito.url');
        
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$token,
        ])->post($url ,$newMessage);
       
    }
    
    return redirect()->route('client.index')
        ->with('success', 'News saved successfully');
       
}
      



}
