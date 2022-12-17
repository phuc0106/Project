<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Bridge\StoreRequest;
use App\Http\Requests\Admin\Bridge\UpdateRequest;
use Illuminate\Support\Facades\DB;

class BridgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bri = DB::select('select bri.*, cou.name as country
                                 from bridges bri inner join countries cou on bri.cou_id=cou.cou_id
                                  order by name');
 
        

        return view('admin.modules.bridge.index', ['bri' => $bri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typ=DB::select('select * from typebridge');
        return view('admin.modules.bridge.create',['typ' => $typ]);
    }

//Get danh sách typebridge
public function gettype()
{
    $data = DB::table("typebridge")->pluck('name','typ_id');
    return json_encode($data);
}
//Get danh sách country
public function getCountry()
{
    $data = DB::table("countries")->pluck('name','cou_id');
    return json_encode($data);
}



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data=$request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('bridges')->insert($data);
        return redirect()->route('admin.bridge.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // show user edit view
        // $data = DB::select('select bri.*, cou.name as country
        // from bridges bri inner join countries cou on bri.cou_id=cou.cou_id')
       
        $data['bri'] = DB::table('bridges')
        ->join('countries', 'bridges.cou_id', '=', 'countries.cou_id')
        ->join('typebridge', 'bridges.typ_id', '=', 'typebridge.typ_id')
        ->where('bri_id',$id)->first();;
        
        return view('admin.modules.bridge.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete user
        DB::table('bridges')->where('bri_id',$id)->delete();
        return redirect()->route('admin.modul.bridge.index');
    }
}
