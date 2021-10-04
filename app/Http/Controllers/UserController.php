<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::select('SELECT * FROM users ORDER BY id DESC');

        //var_dump($posts);
        return view('admin.users', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = (array) DB::table('users')->find(1);
        $data = array_keys($data);
        $data = array_fill_keys($data, '');
        $data = (object) $data;
        return view('admin.users-form', compact('data'));
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
        if(empty($request->password)){
            $records = $request->except('_token','password');
        }else{
            $records = $request->except('_token');
            $records['password'] = Hash::make($request->password);
        }

        if(empty($request->id)){
            User::create($records);
            return redirect('/admin/users')->with('success', 'Berhasil menambahkan data baru!');
        }else{
            $data = User::find($request->id);
            $data->update($records);
            return redirect()->back()->with('success', 'Berhasil mengupdate data!');
        }  
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
        //
        $data = DB::table('users')->find($id);
        return view('admin.users-form',compact('data'));
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
        User::find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data!');
    }
}
