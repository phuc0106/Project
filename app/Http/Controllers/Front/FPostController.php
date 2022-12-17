<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Front\Post\StoreRequest;
use App\Http\Requests\Front\Post\UpdateRequest;

use Illuminate\Support\Facades\DB;

class FPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show view user Data table
        $data['post'] = DB::table('posts')->orderBy('created_at', 'DESC')->get();
        return view('front.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show user view create
        return view('front.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
       
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
        $data['post'] = DB::table('posts')->where('post_id', $id)->first();
        return view('front.post.edit', $data);
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