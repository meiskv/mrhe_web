<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.list', ['users' => User::orderBy('id', 'desc')->paginate(1)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', ['roles' => Role::all()]);
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
            'firstname'         => 'required',
            'lastname'         => 'required',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:8'
        ]);

        $data = [
            'firstname'        => $request->input('firstname'),
            'lastname'           => $request->input('lastname'),
            'email'             => $request->input('email'),
            'password'         => bcrypt($request->input('password'))
        ];

        $newUser = User::create($data);

        //SYNC THE USER TO THE ROLE
        $user = User::find($newUser->id);
        $user->roles()->sync([$request->input('role')]);

        return redirect()->route('admin.user.index')->with('success', 'Successfully created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $data = User::find($id);
        // return view('admin.users.edit', compact('data'));

        return view('admin.users.edit', [
                                            'data'          => User::find($id),
                                            'roles'         => Role::all(),
                                            'user_role'     => User::find($id)->roles()->first()
                                        ]);
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
            'firstname'     => 'required',
            'lastname'      => 'required',
            'email'         => 'required|email'
        ]);

        $user           = User::find($id);
        $user->firstname     = $request->input('firstname');
        $user->lastname     = $request->input('lastname');
        $user->email    = $request->input('email');

        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($request->has('role')) {
            $user->detachAllRoles();
            $user->attachRole($request->input('role'));
        }

        $user->updated_at = date('Y-m-d');
        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'Successfully deleted!');
    }

    public function dettach(Request $request, $id)
    {
        $user = User::find($id);

        $user->detachRole($request->input('role'));

        return redirect()->route('admin.user.edit', $id)->with('success', 'Success!');
    }

    public function anyData()
    {

        $data = User::all();
        //return Datatables::of(User::select('*'))->make(true);
        return Datatables::of($data)
         ->addColumn('action', function ($user) {
                return '<a href="user/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';})
        ->make(true);
    }    
}
