<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;

use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        // Show view user Data table
       // $data['posts'] = DB::table('posts')->orderBy('pos_id','DESC')->get();
        $sql='select pos_id, title, author, left(content,50) as content, pos.created_at, 
        bri.name as bridge from posts pos inner join bridges bri on bri.bri_id=pos.bri_id order by pos_id';
        $data['posts']=DB::select($sql);
        return view('admin.modules.post.index', $data);
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
         return view('admin.modules.post.create', compact('bri', 'selected_bri'));
    
   
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
        DB::table('posts')->insert($data);

        return redirect()->route('admin.post.index')->with('success','Add data successfully');

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
        $data['post'] = DB::table('posts')->where('pos_id',$id)->first();
        return view('admin.modules.post.edit',$data);
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
        DB::table('posts')->where('pos_id',$id)->update($data);

        return redirect()->route('admin.post.index')->with('success','Update data successfully');
        
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
        DB::table('posts')->where('pos_id',$id)->delete();
        return redirect()->route('admin.post.index');
    }
}
