<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = DB::table('posts')->orderBy('id','desc')->paginate(10);

        //var_dump($posts);
        return view('admin.posts', compact('posts'));
    }

    public function indeks($kategori)
    {
        //
        $data = DB::table('posts')->where('type',$kategori)->paginate(10);
        $kategori = ucwords($kategori);
        return view('indeks',compact('data', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = (array) DB::table('posts')->find(1);
        $data = array_keys($data);
        $data = array_fill_keys($data, '');
        $data = (object) $data;
        return view('admin.posts-form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->id)){
            Post::create($request->except('_token'));
            return redirect('/admin/posts')->with('success', 'Berhasil menambahkan data baru!');
        }else{
            $post = Post::find($request->id);
            $post->update($request->except('_token','id'));
            return redirect()->back()->with('success', 'Berhasil mengupdate data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kategori,$slug)
    {
        //
        $data = DB::table('posts')->where('slug',$slug)->first();
        return view('baca',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = DB::table('posts')->find($id);
        return view('admin.posts-form',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
