<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;



class NewsController extends Controller
{
    
    public function getNews()
    {   
        //https://admininfo.info/utilizar-fuentes-rss-con-laravel
        //$response = Http::get('https://api.github.com/users/binascohub/repos');
        $url ='https://g1.globo.com/rss/g1/';
        $header = get_headers($url);
        $response  = substr($header[0],9,3);
        if($response == '404'){
            return 'Network Error';
        }
        $data = simplexml_load_string(file_get_contents($url));       
        
         
        $arrayNews = [
            'title' => $data->channel->item->title,
            'link' => $data->channel->item->link   
         ];

         return $arrayNews;
        //$objeto->channel->item->title  
    }
    
    public function store(Request $request)
    {
        // Validate the request... 
        
        $arrayNews = $this->getNews();
        $title = Arr::get($arrayNews, 'title');
        $link = Arr::get($arrayNews, 'link');
        
        $news = new News;
        $news = News::create([
                'title' =>  $title,
                'link' =>  $link ,
            ]);
        
       
        $news->save();

          
        return 'saved news successfully';
        
    }
    
   
}
