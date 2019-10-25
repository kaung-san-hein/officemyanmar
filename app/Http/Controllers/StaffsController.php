<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\StaffsRequest;
use App\Position;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffsController extends Controller
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
            $staffs = DB::table('staff')
                ->join('hotels','staff.currentHotel','=','hotels.id')
                ->join('positions','staff.currentPosition','=','positions.id')
                ->select('staff.*','hotels.hotel_name','positions.position_name')
                ->orderBy('id')
                ->whereRaw('concat(staff.id," ",name," ",nrc," ",nrc_no," ",hotel_name," ",position_name) like ?', "%{$searchTxt}%")
                ->get();
        }
        else{
            $staffs = DB::table('staff')
                ->join('hotels','staff.currentHotel','=','hotels.id')
                ->join('positions','staff.currentPosition','=','positions.id')
                ->select('staff.*','hotels.hotel_name','positions.position_name')
                ->orderBy('id')
                ->get();
        }
        return view('staffs.index',compact('staffs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staffs = DB::table('staff')
            ->join('hotels','staff.currentHotel','=','hotels.id')
            ->join('positions','staff.currentPosition','=','positions.id')
            ->select('staff.*','hotels.hotel_name','positions.position_name')
            ->where('staff.id','=',$id)
            ->get();

        return view('staffs.show',compact('staffs'));
    }
}
