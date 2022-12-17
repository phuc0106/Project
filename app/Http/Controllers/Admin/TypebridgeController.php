<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Bridge\StoreRequest;
use App\Http\Requests\Admin\Bridge\UpdateRequest;
use Illuminate\Support\Facades\DB;

class TypebridgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $data['typebridge'] = DB::table('typebridge')->orderBy('typ_id','DESC')->get();
        return view('admin.modules.typebridge.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.typebridge.create');
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
           DB::table('typebridge')->insert($data);
   
           return redirect()->route('admin.typebridge.index')->with('success','Typebridge added successfully');
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
       $data['typebridge'] = DB::table('typebridge')->where('typ_id',$id)->first();
       return view('admin.modules.typebridge.edit',$data);
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
        $data = $request->except('_token','name_confirmation');
        $data['updated_at'] = new \DateTime();
        DB::table('typebridge')->where('typ_id',$id)->update($data);

        return redirect()->route('admin.typebridge.index')->with('success','Typebridge updated successfully');
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
        DB::table('typebridge')->where('typ_id',$id)->delete();
        return redirect()->route('admin.typebridge.index')->with('success', 'Typebridge deleted successfully');;
    }
}
