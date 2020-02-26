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
      $request->validate([
        'key' => 'required',
      ]);
      $trackId = $request->key;
      $shippments = shippment::where('key', $trackId)->first();
      $infos = info::where('trackId', $trackId)->first();
      if($shippments === null && $infos === null){
        return \redirect('/')->with('warning', 'Invalid Tracking Id');
      }
      else{
        return view('find', compact('shippments', 'infos'))->with('success', 'Valid Tracking Id');
      }
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
