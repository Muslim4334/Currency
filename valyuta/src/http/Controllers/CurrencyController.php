<?php

namespace Muslim\Currency\http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class CurrencyController extends Controller
{
    public function index()
    {
        $posts = Http::get('https://nbu.uz/uz/exchange-rates/json/')->json();
        $collection = collect($posts[23]);
        $collection2 = collect($posts[18]);
        $collection3 = collect($posts[7]);
        $collection4 = collect($posts[8]);


        return view('currency::currency::', [
        'collection'=>$collection, $collection2, $collection3, $collection4
            ]);
    }
}
