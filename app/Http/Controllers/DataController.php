<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getSrs()
    {
        $srs = DB::table('n_r_c_srs')->pluck('srs','id');
        return view('downlist',compact('srs'));
    }
    public function getStates($id)
    {
        $states = DB::table('state_divisions')->where('srs',$id)->pluck('states_divisions','id');
        return json_encode($states);
    }
    public function getNRC(Request $request){
        $srs = $request->get('srs');
        $states_divisions = $request->get('states_divisions');
        $N = $request->get('N');
        $nrc = DB::table('state_divisions')
            ->join('n_r_c_srs','state_divisions.srs','=','n_r_c_srs.id')
            ->select('state_divisions.states_divisions','n_r_c_srs.srs')
            ->where('state_divisions.id','=',$states_divisions,'and','state_divisions.srs','=',$srs)
            ->get();

        $hotels = Hotel::all();
        $positions = Position::all();
        return view('manager.staffs.create',compact('hotels','positions','nrc','N'));
    }
}
