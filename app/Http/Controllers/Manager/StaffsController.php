<?php

namespace App\Http\Controllers\Manager;

use App\Hotel;
use App\Http\Requests\StaffsRequest;
use App\NRCSr;
use App\Position;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        return view('manager.staffs.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffsRequest $request)
    {
        $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
        $photo = $request->file('photo');
        $extension = $photo->getClientOriginalExtension();
        $check = in_array($extension,$allowedfileExtension);

        if ($check){
            $filename = $photo->store('photos');
            Staff::create([
                'cp' => rand(1000,9999),
                'name' => $request->get('name'),
                'nrc' => $request->get('nrc'),
                'nrc_no' => $request->get('nrc_no'),
                'dob' => $request->get('dob'),
                'fatherName' => $request->get('fatherName'),
                'fatherJob' => $request->get('fatherJob'),
                'motherName' => $request->get('motherName'),
                'motherJob' => $request->get('motherJob'),
                'nationality' => $request->get('nationality'),
                'religion' => $request->get('religion'),
                'gender' => $request->get('gender'),
                'maritalStatus' => $request->get('maritalStatus'),
                'bloodGroup' => $request->get('bloodGroup'),
                'currentHotel' => $request->get('currentHotel'),
                'currentPosition' => $request->get('currentPosition'),
                'education' => $request->get('education'),
                'qualification' => $request->get('qualification'),
                'otherQualification' => $request->get('otherQualification'),
                'achievement' => $request->get('achievement'),
                'address' => $request->get('address'),
                'phoneNo' => $request->get('phoneNo'),
                'workExperience' => $request->get('workExperience'),
                'photo' => $filename,
            ]);
        }
        else{
            return redirect(route('nrc'))->with('msg','Try Again');
        }
        return redirect(route('nrc'))->with('msg','Staff has been created successfully!');
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

        return view('manager.staffs.show',compact('staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staffs = DB::table('staff')
            ->join('hotels','staff.currentHotel','=','hotels.id')
            ->join('positions','staff.currentPosition','=','positions.id')
            ->select('staff.*','hotels.hotel_name','positions.position_name')
            ->where('staff.id','=',$id)
            ->get();

        $hotels = Hotel::all();
        $selectedHotel = DB::table('hotels')
            ->join('staff','staff.currentHotel','=','hotels.id')
            ->select('hotels.hotel_name')
            ->get()
            ->pluck('hotel_name')
            ->toArray();

        $positions = Position::all();
        $selectedPosition = DB::table('positions')
            ->join('staff','staff.currentPosition','=','positions.id')
            ->select('positions.position_name')
            ->get()
            ->pluck('position_name')
            ->toArray();

        return view('manager.staffs.edit',compact('staffs','hotels','positions','selectedHotel','selectedPosition'));
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
        if ($request->hasFile('photo')){
            $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension();
            $check = in_array($extension,$allowedfileExtension);

            if ($check){
                $staff = Staff::whereId($id)->firstOrFail();
                $image = $staff->photo;
                if (Storage::exists($image)){
                    Storage::delete($image);
                }
                $filename = $photo->store('photos');

                Staff::where('id',$id)
                    ->update([
                        'name' => $request->get('name'),
                        'nrc' => $request->get('nrc'),
                        'nrc_no' => $request->get('nrc_no'),
                        'dob' => $request->get('dob'),
                        'fatherName' => $request->get('fatherName'),
                        'fatherJob' => $request->get('fatherJob'),
                        'motherName' => $request->get('motherName'),
                        'motherJob' => $request->get('motherJob'),
                        'nationality' => $request->get('nationality'),
                        'religion' => $request->get('religion'),
                        'gender' => $request->get('gender'),
                        'maritalStatus' => $request->get('maritalStatus'),
                        'bloodGroup' => $request->get('bloodGroup'),
                        'currentHotel' => $request->get('currentHotel'),
                        'currentPosition' => $request->get('currentPosition'),
                        'education' => $request->get('education'),
                        'qualification' => $request->get('qualification'),
                        'otherQualification' => $request->get('otherQualification'),
                        'achievement' => $request->get('achievement'),
                        'address' => $request->get('address'),
                        'phoneNo' => $request->get('phoneNo'),
                        'workExperience' => $request->get('workExperience'),
                        'photo' => $filename,
                    ]);
            }
            else{
                return redirect()->back()->with('msg','Try Again');
            }
        }
        else{
            Staff::where('id',$id)
                ->update([
                    'name' => $request->get('name'),
                    'nrc' => $request->get('nrc'),
                    'nrc_no' => $request->get('nrc_no'),
                    'dob' => $request->get('dob'),
                    'fatherName' => $request->get('fatherName'),
                    'fatherJob' => $request->get('fatherJob'),
                    'motherName' => $request->get('motherName'),
                    'motherJob' => $request->get('motherJob'),
                    'nationality' => $request->get('nationality'),
                    'religion' => $request->get('religion'),
                    'gender' => $request->get('gender'),
                    'maritalStatus' => $request->get('maritalStatus'),
                    'bloodGroup' => $request->get('bloodGroup'),
                    'currentHotel' => $request->get('currentHotel'),
                    'currentPosition' => $request->get('currentPosition'),
                    'education' => $request->get('education'),
                    'qualification' => $request->get('qualification'),
                    'otherQualification' => $request->get('otherQualification'),
                    'achievement' => $request->get('achievement'),
                    'address' => $request->get('address'),
                    'phoneNo' => $request->get('phoneNo'),
                    'workExperience' => $request->get('workExperience'),
                ]);
        }
        return redirect()->back()->with('msg','Staff has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::whereId($id)->firstOrFail();
        $image = $staff->photo;
        if (Storage::exists($image)){
            Storage::delete($image);
        }
        $staff->delete();
        return redirect(route('manager.staffs.index'))->with('msg','Staff has been deleted successfully!');
    }
}
