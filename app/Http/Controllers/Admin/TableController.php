<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Table;
use App\Models\Land;
use Yajra\Datatables\Datatables;

class TableController extends Controller
{

    public function index()
    {
        return view('admin.data.list');
    }

    public function edit($id)
    {
        $table = Table::find($id);
        $user = User::find($id);
        $land = Land::all();
        // return view('admin.data.edit', [
        //                                     'user'          => User::find($id),
        //                                     'roles'         => Role::all(),
        //                                     'user_role'     => User::find($id)->roles()->first(),
        //                                     'table'         => Table::find($id)
        //                                 ]);
        return view('admin.data.edit',compact('table','user','land'));
    }

    public function create()
    {
        $land = Land::all();
        return view('admin.data.create',compact('land'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'land_number_id'        => 'required|unique:tableone,land_number_id',
            'property_no'           => 'required',
            'plan_type'             => 'required',
            'style'                 => 'required',
            'land_area'             => 'required',
            'property_area'         => 'required',
            'no_of_bedroom'         => 'required',
            'no_of_bathroom'        => 'required',
            'total_built_area'      => 'required'
        ]);

        $data = [
            'land_number_id'        => $request->input('land_number_id'),
            'property_no'           => $request->input('property_no'),
            'plan_type'             => $request->input('plan_type'),
            'style'                 => $request->input('style'),
            'land_area'             => $request->input('land_area'),
            'property_area'         => $request->input('property_area'),
            'no_of_bedroom'         => $request->input('no_of_bedroom'),
            'no_of_bathroom'        => $request->input('no_of_bathroom'),
            'total_built_area'      => $request->input('total_built_area')
        ];

        Table::create($data);

        return redirect()->route('datatables')->with('success', 'Successfully created!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'land_number_id'        => 'required|unique:tableone,land_number_id,'.$id,
            'property_no'           => 'required',
            'plan_type'             => 'required',
            'style'                 => 'required',
            'land_area'             => 'required',
            'property_area'         => 'required',
            'no_of_bedroom'         => 'required',
            'no_of_bathroom'        => 'required',
            'total_built_area'      => 'required'
        ]);

        $table           = Table::find($id);
        $table->land_number_id      = $request->input('land_number_id');
        $table->property_no         = $request->input('property_no');
        $table->plan_type           = $request->input('plan_type');
        $table->style               = $request->input('style');
        $table->land_area           = $request->input('land_area');
        $table->property_area       = $request->input('property_area');
        $table->no_of_bedroom       = $request->input('no_of_bedroom');
        $table->no_of_bathroom      = $request->input('no_of_bathroom');
        $table->total_built_area    = $request->input('total_built_area');



        $table->updated_at = date('Y-m-d');
        $table->save();

        return redirect()->route('datatables')->with('success', 'Successfully updated!');
    }

    public function getIndex()
    {
        return view('admin.data.list');
    }

    public function anyData()
    {

        $data = Table::all();
        //return Datatables::of(User::select('*'))->make(true);
        return Datatables::of($data)
         ->addColumn('action', function ($user) {
                return '<a href="data/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';})
        ->make(true);
    }    
}
