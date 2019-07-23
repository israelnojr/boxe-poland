<?php

namespace boxe\Http\Controllers;

use Illuminate\Http\Request;
use boxe\shippment;
use boxe\info;
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
        $shippments = shippment::where('key', $trackId)->get();
        $infos = info::where('trackId', $trackId)->get();

        return view('find', compact('shippments', 'infos'));
    }

    public function services()
    {
      return view('service');
    }

    public function about()
    {
      return view('about');
    }

    public function delivery()
    {
      return view('delivery');
    }

    public function contact()
    {
      return view('contact');
    }
}
