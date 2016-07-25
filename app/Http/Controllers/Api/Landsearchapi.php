<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Landsearch;

class Landsearchapi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return landsearch::paginate(10);
    }

    public function show($id)
    {
        // $a = Table::where('id', $id)->get();
        // $a;

        // $b = Table::find($id);
        // echo dd($b);

        $data = landsearch::where('land_number_id', $id)->first();
        
        if (!$data){
            //return response()->json(['error' => ['code' => '404', 'message' => 'Data not found!']]);
            echo "Data not found!";
        }else{
            // return response()->json(['data' => $data]);
             echo 'Search Completed';
             echo "|";
             echo $data['land_user'];
             echo "|";
             echo $data['plan'];
             echo "|";
             echo $data['beneficiary'];
             echo "|";
             echo $data['owners_name'];
             echo "|";
             echo $data['coordinates'];
             echo "|";
             echo $data['areasqft'];
             echo "|";
             echo $data['areasqm'];
             echo "|";
             echo $data['land_number_id'];
             echo "|";
        }
        
    }

   
}
