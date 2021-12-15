<?php

namespace App\Http\Controllers;

use App\Models\DataKucing;
use Illuminate\Http\Request;

class DataKucingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataKucing::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kucing = new DataKucing();
        $kucing->nama = $request->nama;
        $kucing->ras = $request->ras;
        $kucing->harga = $request->harga;
        $kucing->save();
        
        return "data berhasil ditambah";
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataKucing  $dataKucing
     * @return \Illuminate\Http\Response
     */
    public function show(DataKucing $dataKucing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKucing  $dataKucing
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKucing $dataKucing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataKucing  $dataKucing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $ras = $request->ras;
        $harga = $request->harga;

        $kucing = DataKucing::find($id);
        $kucing->nama = $nama;
        $kucing->ras = $ras;
        $kucing->harga = $harga;
        $kucing->save();

        return "data ter update";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKucing  $dataKucing
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $kucing = DataKucing::find($id);
        $kucing->delete();
    }
}
