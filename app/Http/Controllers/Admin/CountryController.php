<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Country\StoreRequest;
use App\Http\Requests\Admin\Country\UpdateRequest;
use Illuminate\Support\Facades\DB;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $country = DB::select('select cou.*, con.name as continent
                                 from countries cou inner join continents con on con.con_id=cou.cou_id
                                  order by name');
 
        

        return view('admin.modules.country.index', ['country' => $country]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cont=DB::select('select * from continents');
        return view('admin.modules.country.create',['cont' => $cont]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
         // Module action form
         $data = $request->except('_token');
         $data['created_at'] = new \DateTime();
 
         if($request->file('flag_images_path')){
             $file= $request->file('flag_images_path');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('images/flag'), $filename);
             $data['flag_images_path']= $filename;
         }
 
         DB::table('countries')->insert($data);
 
         return redirect()->route('admin.country.index')->with('success','Add Country successfully');
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
    public function getContinent()
    {
     
        $data = DB::table("continents")->pluck('name','con_id');
        return json_encode($data);
    }


    public function edit($id)
    {
        $country = DB::select('select cou.*, con.name as continent
        from countries cou inner join continents con on con.con_id=cou.cou_id
         order by name')->where('con_id',$id)->first();;
       
      
        return view('admin.modules.country.edit',$data);
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
        //
    }
}
