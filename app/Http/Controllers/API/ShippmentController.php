<?php

namespace boxe\Http\Controllers\API;

use Illuminate\Http\Request;
use boxe\Http\Controllers\Controller;
use boxe\shippment;
class ShippmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return shippment::all(); //latest()->paginate(5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [                
            'key' => ['unique:shippments'],                    
            'title' => ['required', 'string' ], 
            'shipperName' => ['required', 'string' ],
            'shipperNum' => ['required', 'max:15' ],
            'shipperAddress'  => ['required', 'string'],
            'recieverName' => ['required', 'string'],
            'recieverNum'  => ['required', 'max:15' ],
            'recieverAddress' => ['required', 'string'],
            'type'        => ['required', 'string'],
            'weight'      => ['required'],
            'departure'   => ['required', 'string'],
            'destination' => ['required', 'string'],
            'bookingMode' => ['required', 'string'],
            'amount'      => ['required'],
            'mode'        => ['required', 'string'],
            'pickupDate'  => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);
    
        return shippment::create([
            'key' => str_random(11),
            'title' => $request ['title'],     
            'shipperName' => $request ['shipperName'], 
            'shipperNum' => $request ['shipperNum' ], 
            'shipperAddress'  => $request ['shipperAddress'],
            'recieverName' => $request ['recieverName'],
            'recieverNum'  => $request ['recieverNum' ],
            'recieverAddress' => $request ['recieverAddress'],
            'type'        => $request ['type'],
            'weight'      => $request ['weight'],
            'departure'   => $request ['departure'],
            'destination' => $request ['destination'],
            'bookingMode' => $request ['bookingMode'],
            'amount'      => $request ['amount'],
            'mode'        => $request ['mode'],
            'pickupDate'  => $request ['pickupDate'],
            'description' => $request ['description'],
        ]);
    }

    // public function tracker(Request $request)
    // {
    //     $trackid = $request->key;
    //     return = Shippment::where('key', $trackid)->with('info')->get();
    //     return view('find')->with('find', $find);
    // }

    public function update(Request $request, $id)
    {
        $shippment = shippment::findOrFail($id);
        $this->validate($request, [
            'key' => [],                    
            'title' => ['required', 'string' ], 
            'shipperName' => ['required', 'string' ],
            'shipperNum' => ['required', 'max:15' ],
            'shipperAddress'  => ['required', 'string'],
            'recieverName' => ['required', 'string'],
            'recieverNum'  => ['required', 'max:15'],
            'recieverAddress' => ['required', ],
            'type'        => ['required', 'string'],
            'weight'      => ['required'],
            'departure'   => ['required', 'string'],
            'destination' => ['required', 'string'],
            'bookingMode' => ['required', 'string'],
            'amount'      => ['required'],
            'mode'        => ['required', 'string'],
            'pickupDate'  => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $shippment->update($request->all());
        return ['message' => 'upate shippment'];
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shippment = shippment::findOrFail($id);
        $shippment->delete();
        return ['message' => 'shippment Deleted'];
    }
}
