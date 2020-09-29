<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        //抓取資料
        $news_list = DB::table('news')
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        // dd($news_list);
        return view('front/index',compact('news_list'));
    }

    public function news()
    {
        $news_list = DB::table('news')
        ->orderBy('id', 'desc')->paginate(6);
        return view('front/news',compact('news_list'));
    }

    public function news_info($news_id)
        {

        $news = DB::table('news')->where('id','=',$news_id)->first();
        // dd($news_id);

        return view('front/news_info',compact('news'));
    }

    public function contact_us()
    {
        $news_list = DB::table('news')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();
        return view('front/contact_us');
    }

}
