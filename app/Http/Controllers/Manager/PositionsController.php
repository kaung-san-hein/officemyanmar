<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\PositionsRequest;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::all();
        return view('manager.positions.index',compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionsRequest $request)
    {
        Position::create([
            'position_name' => $request->get('position_name'),
        ]);

        return redirect(route('manager.positions.create'))->with('msg','Position has been created successfully!');
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
        $position = Position::whereId($id)->firstOrFail();
        return view('manager.positions.edit',compact('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionsRequest $request, $id)
    {
        Position::where('id',$id)
            ->update([
               'position_name' => $request->get('position_name')
            ]);

        return redirect()->back()->with('msg','Position has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::whereId($id)->firstOrFail();
        $position->delete();
        return redirect()->back()->with('msg','Position has been deleted successfully!');
    }
}
