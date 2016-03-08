<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Table;
use App\Models\Land;
use App\Models\Muteena;
use App\Models\Fiveland;
use Yajra\Datatables\Datatables;

class MuteenaController extends Controller
{

    public function index()
    {
        return view('admin.muteena.list');
    }

    public function edit($id)
    {
        $muteena = Muteena::find($id);
        $user = User::find($id);
        $fland = Fiveland::all();

        return view('admin.muteena.edit',compact('muteena','user','fland'));
    }

    public function create()
    {
        $fland = Fiveland::all();
        return view('admin.muteena.create',compact('fland'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'land_number_id'        => 'required|unique:muteena,land_number_id',
            'plan_type'             => 'required',
            'style'                 => 'required'
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

        Muteena::create($data);

        return redirect()->route('muteena')->with('success', 'Successfully created!');
    }

    public function update(Request $request, $id)
    {


      
        $this->validate($request, [
            'land_number_id'        => 'required|unique:muteena,land_number_id,'.$id,
            'plan_type'             => 'required',
            'style'                 => 'required'
        ]);

        $table           = Muteena::find($id);
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

        return redirect()->route('muteena')->with('success', 'Successfully updated!');
    }

    public function getIndex()
    {
        return view('admin.muteena.list');
    }

    public function anyData()
    {

        $data = Muteena::all();
        //return Datatables::of(User::select('*'))->make(true);
        return Datatables::of($data)
         ->addColumn('action', function ($user) {
                return '<a href="muteena/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';})
        ->make(true);
    }    
}
