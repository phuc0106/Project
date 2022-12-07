<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Continent\StoreRequest;
use App\Http\Requests\Admin\Continent\UpdateRequest;
use Illuminate\Support\Facades\DB;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['continents']=DB::get('continents')->get();     
        // return view('admin.modules.continent.index', $data);

        $continents = DB::select('select * from continents');
 
        return view('admin.modules.continent.index', ['continents' => $continents]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.continent.create');
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
        $data['created_at']=new \DateTime();
        DB::table('continents')->insert($data);
        return redirect()->route('admin.continent.index')->with('success', 'Continent inserted successfully');
        //
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
        $data['continent']=DB::table('continents')->where('con_id',$id)->first();
        return view('admin.modules.continent.edit', $data);
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
        $data=$request->except('_token');
        $data['updated_at']=new \DateTime();
        DB::table('continents')->where('con_id',$id)->update($data);
        return redirect()->route('admin.continent.index')->with('success', 'Continent updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('continents')->where('con_id',$id)->delete();
        return redirect()->route('admin.continent.index')->with('success', 'Continent deleted successfully');
    }
}
