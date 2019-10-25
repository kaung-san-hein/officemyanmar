<?php

namespace App\Http\Controllers\Manager;

use App\Hotel;
use App\Http\Requests\HotelsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchTxt = $request->get('searchTxt');
        if ($searchTxt){
            $hotels = DB::table('hotels')
                ->where('hotel_name','LIKE','%'.$searchTxt.'%')
                ->get();
        }
        else{
            $hotels = Hotel::all();
        }
        return view('manager.hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelsRequest $request)
    {
        Hotel::create([
            'hotel_name' => $request->get('hotelName'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone')
        ]);
        return redirect(route('manager.hotels.create'))->with('msg','Hotel has been created successfully!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::whereId($id)->firstOrFail();
        return view('manager.hotels.edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HotelsRequest $request, $id)
    {
        Hotel::where('id',$id)
            ->update([
               'hotel_name' => $request->get('hotelName'),
               'address' => $request->get('address'),
               'phone' => $request->get('phone'),
            ]);

        return redirect()->back()->with('msg','Hotel has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::whereId($id)->firstOrFail();
        $hotel->delete();
        return redirect()->back()->with('msg','Hotel has been successfully!');
    }
}
