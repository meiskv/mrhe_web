<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Muhesnah;
use Yajra\Datatables\Datatables;

class MuhesnahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.muhesnah.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.muhesnah.create');
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
            'apartment_code'        => 'required',
            'building_no'           => 'required',
            'apartment_no'             => 'required',
            'no_of_bedrooms'         => 'required',
            'floor_no'         => 'required',
            'area'        => 'required',
            'balcony'      => 'required'
        ]);

        $data = [
            'apartment_code'        => $request->input('apartment_code'),
            'building_no'           => $request->input('building_no'),
            'apartment_no'             => $request->input('apartment_no'),
            'no_of_bedrooms'         => $request->input('no_of_bedrooms'),
            'floor_no'         => $request->input('floor_no'),
            'area'        => $request->input('area'),
            'balcony'      => $request->input('balcony')
        ];

        Muhesnah::create($data);

        return redirect()->route('muhesnah')->with('success', 'Successfully created!');
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
        $muhesnah = Muhesnah::find($id);
        // return view('admin.data.edit', [
        //                                     'user'          => User::find($id),
        //                                     'roles'         => Role::all(),
        //                                     'user_role'     => User::find($id)->roles()->first(),
        //                                     'table'         => Table::find($id)
        //                                 ]);
        return view('admin.muhesnah.edit',compact('muhesnah'));
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
            'apartment_code'        => 'required',
            'building_no'           => 'required',
            'apartment_no'          => 'required',
            'no_of_bedrooms'        => 'required',
            'floor_no'              => 'required',
            'area'                  => 'required',
            'balcony'               => 'required'
        ]);

        $table           = Muhesnah::find($id);
        $table->apartment_code      = $request->input('apartment_code');
        $table->building_no         = $request->input('building_no');
        $table->apartment_no        = $request->input('apartment_no');
        $table->no_of_bedrooms      = $request->input('no_of_bedrooms');
        $table->floor_no            = $request->input('floor_no');
        $table->area                = $request->input('area');
        $table->balcony             = $request->input('balcony');



        $table->updated_at = date('Y-m-d');
        $table->save();

        return redirect()->route('muhesnah')->with('success', 'Successfully updated!');
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
        return view('admin.muhesnah.list');
    }

    public function anyData()
    {

        $data = Muhesnah::all();
        //return Datatables::of(User::select('*'))->make(true);
        return Datatables::of($data)
         ->addColumn('action', function ($user) {
                return '<a href="muhesnah/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';})
        ->make(true);
    }    
}
