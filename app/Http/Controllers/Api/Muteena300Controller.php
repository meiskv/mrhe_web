<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Table;


class Muteena300Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Table::paginate(10);
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

// type
// style
// area
// number of bedrooms
// number of bathrooms
// echo "|";
// echo $data['property_no'];
// echo "|";
// echo $data['land_area'];
// echo "|";
// echo $data['property_area'];
// echo "|";
// echo $data['no_of_bedroom'];
// echo "|";
// echo $data['no_of_bathroom'];

        if (!$data){
            //return response()->json(['error' => ['code' => '404', 'message' => 'Data not found!']]);
            echo "Data not found!";
        }else{
            //return response()->json(['data' => Table::find($id)]);
             echo 'Search Completed';
             echo "|";
             echo $data['plan_type'];
             echo "|";
             echo $data['style'];
             echo "|";
             echo $data['property_area'];
             echo "|";
             echo $data['no_of_bedroom'];
             echo "|";
             echo $data['no_of_bathroom'];
             echo "|";
             echo $data['land_number_id'];
             echo "|";
        }
        
    }

    
}
