<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Landsearch;
use App\Models\threelandareas;
use Yajra\Datatables\Datatables;

class LandSearchController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $landareas = threelandareas::all();
        return view('admin.landsearch.create',compact('landareas'));
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
            'land_number_id'        => 'required|unique:landsearch,land_number_id'
        ]);

        $data = [
            'land_number_id'   => $request->input('land_number_id'),
            'land_use'         => $request->input('land_use'),
            'plan'             => $request->input('plan'),
            'beneficiary'      => $request->input('beneficiary'),
            'owners_name'      => $request->input('owners_name'),
            'coordinates'      => $request->input('coordinates'),
            'areasqft'         => $request->input('areasqft'),
            'areasqm'          => $request->input('areasqm'),
            'areaname'         => $request->input('areaname')
        ];

        landsearch::create($data);

        return redirect()->route('lands')->with('success', 'Successfully created!');
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
        $landsearch = landsearch::find($id);
        // $user = User::find($id);
        $landareas = threelandareas::all();

        return view('admin.landsearch.edit',compact('landsearch','landareas'));
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
        
        //*******///
        $this->validate($request, [
            'land_number_id'        => 'required|unique:landsearch,land_number_id,'.$id
        ]);

        $table           = landsearch::find($id);
        $table->land_number_id      = $request->input('land_number_id');
        $table->land_use         = $request->input('land_use');
        $table->plan         = $request->input('plan');
        $table->beneficiary         = $request->input('beneficiary');
        $table->owners_name           = $request->input('owners_name');
        $table->coordinates       = $request->input('coordinates');
        $table->areasqft       = $request->input('areasqft');
        $table->areasqm      = $request->input('areasqm');
        $table->areaname    = $request->input('areaname');



        $table->updated_at = date('Y-m-d');
        $table->save();

        return redirect()->route('lands')->with('success', 'Successfully updated!');
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
        return view('admin.landsearch.list');
    }

    public function anyData()
    {

        $data = landsearch::all();
        //return Datatables::of(User::select('*'))->make(true);
        return Datatables::of($data)
         ->addColumn('action', function ($user) {
                return '<a href="landsearch/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';})
        ->make(true);
    }
}
