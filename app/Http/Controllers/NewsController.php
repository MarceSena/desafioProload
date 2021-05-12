<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $post = '';
        foreach($data->channel->item as $item){
    
            $post .= '<h1>'.$item->title.'</h1>'; 
            $post .= '<a href"'.$item->link.'</a>';
            $post .= '<p>'.$item->description.'<p>';
            $post .= '<h3>'.$item->copyright.'<h3>';
        }
      
        dd($post);
    }
}