<?php

namespace App\Http\Controllers\Manager;

use App\Hotel;
use App\Http\Requests\PreviousHotelsRequest;
use App\Position;
use App\PreviousHotel;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PreviousHotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $previousHotels = DB::table('previous_hotels')
            ->join('staff','previous_hotels.staff_name','=','staff.id')
            ->join('hotels','previous_hotels.hotel_name','=','hotels.id')
            ->join('positions','previous_hotels.position','=','positions.id')
            ->select('previous_hotels.*','staff.name','staff.cp','hotels.hotel_name','positions.position_name')
            ->orderBy('id')
            ->get();
        return view('manager.previous-hotel.index',compact('previousHotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffs = Staff::all();
        $hotels = Hotel::all();
        $positions = Position::all();
        return view('manager.previous-hotel.create',compact('staffs','hotels','positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreviousHotelsRequest $request)
    {
        PreviousHotel::create([
            'staff_name' => $request->get('staff_name'),
            'hotel_name' => $request->get('hotel_name'),
            'position' => $request->get('position'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'remark' => $request->get('remark'),
            'manager_name' => $request->get('manager_name')
        ]);

        return redirect(route('manager.previous.create'))->with('msg','Previous Hotel has been successfully!');
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
        $previous = PreviousHotel::whereId($id)->firstOrFail();

        $staffs = Staff::all();
        $selectedStaff = DB::table('previous_hotels')
            ->join('staff','previous_hotels.staff_name','=','staff.id')
            ->select('staff.cp')
            ->get()
            ->pluck('cp')
            ->toArray();

        $hotels = Hotel::all();
        $selectedHotel = DB::table('previous_hotels')
            ->join('hotels','previous_hotels.hotel_name','=','hotels.id')
            ->select('hotels.hotel_name')
            ->get()
            ->pluck('hotel_name')
            ->toArray();

        $positions = Position::all();
        $selectedPosition = DB::table('previous_hotels')
            ->join('positions','previous_hotels.position','=','positions.id')
            ->select('positions.position_name')
            ->get()
            ->pluck('position_name')
            ->toArray();

        return view('manager.previous-hotel.edit',compact('previous','staffs','selectedStaff','hotels','selectedHotel','positions','selectedPosition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreviousHotelsRequest $request, $id)
    {
        PreviousHotel::where('id',$id)
            ->update([
                'staff_name' => $request->get('staff_name'),
                'hotel_name' => $request->get('hotel_name'),
                'position' => $request->get('position'),
                'start_date' => $request->get('start_date'),
                'end_date' => $request->get('end_date'),
                'remark' => $request->get('remark'),
                'manager_name' => $request->get('manager_name')
            ]);

        return redirect()->back()->with('msg','Previous Hotel has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $previous = PreviousHotel::whereId($id)->firstOrFail();
        $previous->delete();
        return redirect()->back()->with('msg','Previous Hotel has been deleted successfully!');
    }
}
