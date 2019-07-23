<?php

namespace boxe\Http\Controllers\API;

use Illuminate\Http\Request;
use boxe\Http\Controllers\Controller;
use boxe\info;
use boxe\Shippment;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $info = Info::with('Shippment')->get();
         return $info;
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
            'shippment_id' => ['required'],
            'trackId' => ['required'],
            'location' => ['required'],
            'status' => ['required'],
            'remark' => ['required'],
        ]);
    
        return Info::create([     
            'shippment_id' => $request ['shippment_id'],
            'trackId' => $request ['trackId'],
            'location' => $request ['location'],
            'status' => $request ['status'],
            'remark' => $request ['remark'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info = Info::findOrFail($id);
        $this->validate($request, [
            'trackId' => ['required'],
            'location' => ['required'],
            'status' => ['required'],
            'remark' => ['required'],
        ]);

        $info->update($request->all());
        return ['message' => 'upated  Info'];
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Info::findOrFail($id);
        $info->delete();
        return ['message' => 'Info Deleted'];
    }
}
