<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function location(Request $request) {
        $lat = 19.0455;
        $longt = 72.8893;
        if(($request->lat+0.0010)>=$lat && ($request->lat-0.0010)<=$lat)
        {
            if(($request->longt+0.0010)>=$longt && ($request->longt-0.0010)<=$longt)
            {
                $msg = "Sucessfull";
            }   else
            {
                $msg = "Wrong location";
            }
        }else{
            echo "Abhi b wrong location";
        }
        return response()->json(array('msg'=> $msg), 200);
    }
}
