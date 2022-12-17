<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Galary\StoreRequest;
use App\Http\Requests\Admin\Galary\UpdateRequest;
use App\Models\Galary;
use Illuminate\Support\Facades\DB;

class GalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show view user Data table
        $data['galary'] = DB::select('select gal.*, bri.name as bridge
        from bridges bri inner join galaries gal on bri.bri_id=gal.bri_id
         order by created_at');
        return view('admin.modules.galary.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show user view create
        $bri = DB::table('bridges')->get();
        $selected_bri=DB::table('bridges')->first();
       
       

        // return view('front.galary.create', ['bri' => $bri],['selected_bri' => $selected_bri]);
        //return view('front.galary.create', compact('bri', 'selected_bri'));
        return view('admin.modules.galary.create', compact('bri', 'selected_bri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        if($request->file('path_name')){
            $file= $request->file('path_name');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/bridges'), $filename);
            $data['path_name']= $filename;
        }

      
        DB::table('galaries')->insert($data);

        return redirect()->route('admin.galary.index')->with('success','Add data successfully');
       
    }
    public function imageUploadPost()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('uploads'), $imageName);
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
        $data['galary'] = DB::table('galaries')->where('gal_id', $id)->first();
        return view('admin.modules.galary.edit', $data);
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
        // Update Data user
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();
        DB::table('galaries')->where('gal_id', $id)->update($data);

        return redirect()->route('admin.galary.index')->with('success', 'Update data successfully');
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
        DB::table('galaries')->where('gal_id', $id)->delete();
        return redirect()->route('admin.galary.index');
    }
}