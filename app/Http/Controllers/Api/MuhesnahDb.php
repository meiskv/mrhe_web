<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Muhesnah;


class MuhesnahDb extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Muhesnah::paginate(10);
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

        $data = Muhesnah::where('apartment_code', $id)->first();
        
        if (!$data){
            //return response()->json(['error' => ['code' => '404', 'message' => 'Data not found!']]);
            echo "Data not found!";
        }else{
            // return response()->json(['data' => $data]);
             echo 'Search Completed';
             echo "|";
             echo $data['apartment_code'];
             echo "|";
             echo $data['building_no'];
             echo "|";
             echo $data['apartment_no'];
             echo "|";
             echo $data['no_of_bedrooms'];
             echo "|";
             echo $data['floor_no'];
             echo "|";
             echo $data['no_of_bathrooms'];
             echo "|";
             echo $data['area'];
             echo "|";
             echo $data['balcony'];
             echo "|";

        }
        
    }

    
}
