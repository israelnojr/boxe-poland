<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shippment;
use App\Info;
class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function index()
    {
        return view('layouts.master');
    }

    public function find(Request $request)
    {
        $trackId = $request->key;
        // return  Shippment::where('key', $trackId)->with('info')->get();
        $shippments = Shippment::where('key', $trackId)->get();
        $infos = Info::where('trackId', $trackId)->get();

        return view('find', compact('shippments', 'infos'));
    }
}
