<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Hatta;

class HattaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hatta::paginate(10);
    }

    public function show($id)
    {
        // $a = Table::where('id', $id)->get();
        // $a;

        // $b = Table::find($id);
        // echo dd($b);

        $data = Hatta::where('land_number_id', $id)->first();
        
        if (!$data){
            //return response()->json(['error' => ['code' => '404', 'message' => 'Data not found!']]);
            echo "Data not found!";
        }else{
            // return response()->json(['data' => $data]);
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

   
}
