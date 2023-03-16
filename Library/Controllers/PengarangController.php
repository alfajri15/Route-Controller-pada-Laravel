<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pengarang;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dapatkan seluruh data pengarang dengan query builder
        $ar_pengarang = DB::table('pengarang')->get();
        //arahkan ke halaman baru dengan menyertakan data pengarang(compact)
        //di resources/views/pengarang/index.blade.php
        return view('pengarang.index',compact('ar_pengarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //mengarahkan ke halaman form input
        return view('pengarang.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses upload foto
        if(!empty($request->foto)){
            $request->validate([
            'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            $fileName = $request->nama.'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $fileName);
            }else{
            $fileName = '';
            }

        DB::table('pengarang')->insert(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'hp' => $request->hp,
                'foto' => $fileName,
            ]
        );
        //landing page
        return redirect('/pengarang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menampilkan detail pengarang
        $ar_pengarang = DB::table('pengarang')
                        ->where('id','=',$id)->get();
        return view('pengarang.show',compact('ar_pengarang'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //mengarahkan ke halaman form edit
        $data = DB::table('pengarang')
            ->where('id','=',$id)->get();
        return view('pengarang.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit data lama, tangkap request dari form edit pengarang
        DB::table('pengarang')->where('id','=',$id)->update(
            [
                'nama' => $request -> nama,
                'email' => $request -> email,
                'hp' => $request -> hp,
                'foto' => $request -> foto
            ]
        );
        //Landing Page
        return redirect('/pengarang'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus data
        DB::table('pengarang')->where('id',$id)->delete();
        return redirect('/pengarang');
    }
}
