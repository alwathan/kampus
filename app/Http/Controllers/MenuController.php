<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Support\Str;

class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = DB::select('SELECT * FROM menus ORDER BY id DESC');

        //var_dump($posts);
        return view('admin.menus', compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = (array) DB::table('menus')->find(1);
        $data = array_keys($data);
        $data = array_fill_keys($data, '');
        $data = (object) $data;
        return view('admin.menus-form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(empty($request->id)){
            Menu::create($request->except('_token'));
            return redirect('/admin/menus')->with('success', 'Berhasil menambahkan data baru!');
        }else{
            $data = Menu::find($request->id);
            $data->update($request->except('_token','id'));
            return redirect()->back()->with('success', 'Berhasil mengupdate data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $data = DB::table('menus')->where('slug',$slug)->first();
        return view('page',compact('data'));

        //var_dump($data);

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
        $data = DB::table('menus')->find($id);
        return view('admin.menus-form',compact('data'));
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
        Menu::find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data!');
    }
}
