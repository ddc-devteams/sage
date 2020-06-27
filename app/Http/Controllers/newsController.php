<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBnews;

class newsController extends Controller
{
    public function GetData()
    {
    	$data_query_news_vdo = DBnews::where('type', 'vdo')
    						->orderBy('id', 'DESC')->get();
    	return view('fontend.news',
    				[
    					'data_news_vdo'	=>	$data_query_news_vdo
    				]
    			);
    }
}
