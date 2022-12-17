<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Front\Galary\StoreRequest;
use App\Http\Requests\Front\Galary\UpdateRequest;
use App\Models\Galary;
use Illuminate\Support\Facades\DB;

class FGalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show view user Data table
 
        // $data['galary'] = DB::table('galaries')->orderBy('created_at', 'DESC')->get();
        // return view('front.galary.index', $data);

        $gal = DB::select('select gal.*, bri.name as bridge
                                 from bridges bri inner join galaries gal on bri.bri_id=gal.bri_id
                                  order by name');
 
        

        return view('front.galary.index', ['galary' => $gal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show user view create
        return view('front.galary.create');
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


        // if ($request->file('image')) {
        //     $data = $request->except('_token');
        //     $file = $request->image;
        //     //dd($file);
        //     $file_name = $file->getClientOriginalName();

        //     $file->move(public_path('uploads', $file_name));
        //     $data['path_name'] = $file;
        //     DB::table('galaries')->insert($data);
        // }
        //  //$data['created_at'] = new \DateTime();


        // return redirect()->route('admin.galary.index')->with('success', 'Add data successfully');
        $path_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->store('public/uploads/');
        $photo = new Galary();
        $photo->path_name = $path_name;
        $photo->save();
        return redirect()->back();
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