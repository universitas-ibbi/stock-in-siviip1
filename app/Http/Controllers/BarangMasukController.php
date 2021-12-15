<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.barangmasuk.list",[
            "barangmasuk" => BarangMasuk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.barangmasuk.form",[
            "produk" => \App\Models\Produk::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "tanggal" => "required",
            "produk_id" => "required",
            "qty" => "required|numeric"
        ]);

        BarangMasuk::create($request->except('_token'));

        return redirect()->route("barangmasuk.index")
            ->with("info","Berhasil Tambah Barang Masuk");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangMasuk $barangmasuk)
    {
        return view("pages.barangmasuk.form",[
            "produk" => \App\Models\Produk::all(),
            "barangmasuk" => $barangmasuk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangMasuk $barangmasuk)
    {
        $barangmasuk->update($request->except('_token'));

        return redirect()->route("barangmasuk.index")
            ->with("info","Berhasil Update Barang Masuk");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangMasuk $barangmasuk)
    {
        $barangmasuk->delete();

        return redirect()->route("barangmasuk.index")
            ->with('info',"Berhasil Hapus Barang Masuk");
    }
}
