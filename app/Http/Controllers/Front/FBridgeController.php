<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Bridge\StoreRequest;
use App\Http\Requests\Admin\Bridge\UpdateRequest;
use Illuminate\Support\Facades\DB;

class FBridgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $bri = DB::select('select bri.*, path_name
        //                          from bridges bri inner join galaries gal on bri.bri_id=gal.bri_id
        //                           order by name');
        $bri = DB::table('bridges')
        ->join('galaries', 'bridges.bri_id', '=', 'galaries.bri_id')->get();
        

        // $data['data'] = DB::table('bridges')
        // ->get();
        return view('front.bridge.index',['bri' => $bri]);
    }
    public function detail($id)
    {
        
        $data['data'] = DB::table('bridges')->where('bridges.bri_id',$id)   ->first();
        $image['image']=DB::table('galaries')->where('galaries.bri_id',$id)->get();
        return view('front.bridge.detail',$data,$image);
    }

    
}
