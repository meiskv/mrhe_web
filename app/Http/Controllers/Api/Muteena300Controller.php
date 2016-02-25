<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Table;
use Hash;
use Validator;
use DB;

class Muteena300Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::paginate(10);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // $a = Table::where('id', $id)->get();
        // $a;

        // $b = Table::find($id);
        // echo dd($b);

        $data = Table::where('land_number_id', $id)->first();
        

        if (!$data){
            //return response()->json(['error' => ['code' => '404', 'message' => 'Data not found!']]);
            echo "Data not found!";
        }else{
            //return response()->json(['data' => Table::find($id)]);
             echo 'Search Completed';
             echo "|";
             echo $data['land_number_id'];
             echo "|";
             echo $data['property_no'];
             echo "|";
             echo $data['land_area'];
             echo "|";
             echo $data['property_area'];
             echo "|";
             echo $data['no_of_bedroom'];
             echo "|";
             echo $data['no_of_bathroom'];
             echo "|";
             echo $data['total_built_area'];
             echo "|";
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json(array('error' => array('code' => '001', 'message' => $validator->messages())), 200);
        }        

        $user               = new User;
        $user->email        = $request->input('email');
        $user->password     = Hash::make($request->input('password'));
        $user->save();

        return response()->json($user);
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
        $validator = Validator::make($request->all(), [
            'email'         => 'email'
        ]);

        if ($validator->fails()) {
            return response()->json(array('error' => array('code' => '001', 'message' => $validator->messages())), 200);
        }        

        $user               = User::find($id);

        if ($request->has('name')) {
            $user->name         = $request->input('name');
        }

        if ($request->has('email')) {
            $user->email        = $request->input('email');
        }
        
        if ($request->has('password')) {
            $user->password     = Hash::make($request->input('password'));
        }

        $user->save();

        return response()->json(['data' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['data' => ['message' => 'User deleted successfully']]);
    }
}
