<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Hatta;
use Yajra\Datatables\Datatables;

class HattaController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hatta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $hatta = Hatta::find($id);
        // $user = User::find($id);
        $fland = Hatta::all();

        return view('admin.hatta.edit',compact('hatta','fland'));
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
        $this->validate($request, [
            'land_number_id'        => 'required|unique:hatta,land_number_id,'.$id,
            'style'                 => 'required'
        ]);

        $table           = Hatta::find($id);
        $table->land_number_id      = $request->input('land_number_id');
        $table->property_no         = $request->input('property_no');
        $table->plan_type         = $request->input('plan_type');
        $table->style         = $request->input('style');
        $table->land_area           = $request->input('land_area');
        $table->property_area       = $request->input('property_area');
        $table->no_of_bedroom       = $request->input('no_of_bedroom');
        $table->no_of_bathroom      = $request->input('no_of_bathroom');
        $table->total_built_area    = $request->input('total_built_area');



        $table->updated_at = date('Y-m-d');
        $table->save();

        return redirect()->route('hatta')->with('success', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getIndex()
    {
        return view('admin.hatta.list');
    }

    public function anyData()
    {

        $data = Hatta::all();
        //return Datatables::of(User::select('*'))->make(true);
        return Datatables::of($data)
         ->addColumn('action', function ($user) {
                return '<a href="hatta/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';})
        ->make(true);
    }
}
