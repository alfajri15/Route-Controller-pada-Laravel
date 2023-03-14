<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_buku = DB::table('buku') //join tabel dengan Query Builder Laravel
        ->join('pengarang', 'pengarang.id', '=', 'buku.idpengarang')
        ->join('penerbit', 'penerbit.id', '=', 'buku.idpenerbit')
        ->join('kategori', 'kategori.id', '=', 'buku.idkategori')
        ->select('buku.*', 'pengarang.nama', 'penerbit.nama AS pen',
        'kategori.nama AS kat')->get();  return view('buku.index',compact('ar_buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //mengarahkan ke halaman form input buku
        return view('buku.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses input data, tangkap request dari form buku
        DB::table('buku')->insert(
            [
                'isbn' => $request->isbn,
                'judul' => $request->judul,
                'tahun_cetak' => $request->tahun_cetak,
                'stok' => $request->stok,
                'idpengarang' => $request->idpengarang,
                'idpenerbit' => $request->idpenerbit,
                'idkategori' => $request->idkategori
            ]
        );
        //landing page
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menampilkan detail buku
        $ar_buku = DB::table('buku')
        ->join('pengarang','pengarang.id','=','buku.idpengarang')
        ->join('penerbit','penerbit.id','=','buku.idpenerbit')
        ->join('kategori','kategori.id','=','buku.idkategori')
        ->select('buku.*','pengarang.nama','penerbit.nama AS pen','kategori.nama AS kat')
        ->where('buku.id','=',$id)->get();
        return view('buku.show',compact('ar_buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //mengarahkan ke halaman form edit buku
        $data = DB::table('buku')
            ->where('id','=',$id)->get();
        return view('buku.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit data lama, tangkap request dari form edit buku
        DB::table('buku')->where('id','=',$id)->update(
            [
                'isbn' => $request -> isbn,
                'judul' => $request -> judul,
                'tahun_cetak' => $request -> tahun_cetak,
                'stok' => $request -> stok,
                'idpengarang' => $request -> idpengarang,
                'idpenerbit' => $request -> idpenerbit,
                'idkategori' => $request -> idkategori 
            ]
        );
        //Landing Page
        return redirect('/buku'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus data
        DB::table('buku')->where('id',$id)->delete();
        return redirect('/buku');
    }
}
