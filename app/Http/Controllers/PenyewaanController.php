<?php

namespace App\Http\Controllers;

use App\penyewaan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return penyewaan::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $sewa = new penyewaan;
        $sewa ->tanggal_sewa = $request->tanggal_sewa;
        $sewa ->harga_sewa= $request->harga_sewa;
        $sewa ->lama_sewa = $request->lama_sewa;
        $sewa ->hp_sewa= $request->hp_sewa;
        $sewa ->alamat_sewa= $request->alamat_sewa;
        $sewa->save();

        return 'Berhasil Di simpan';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function show(penyewaan $penyewaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function edit(penyewaan $penyewaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $tanggal_sewa = $request->input('tanggal_sewa');
        $harga_sewa = $request->input('harga_sewa');
        $lama_sewa = $request->input('lama_sewa');
        $hp_sewa = $request->input('hp_sewa');
        $alamat_sewa= $request->input('alamat_sewa');

        $data = penyewaan::where('id',$id)->first();
        $data->tanggal_sewa = $tanggal_sewa;
        $data->harga_sewa= $harga_sewa;
        $data->lama_sewa = $lama_sewa;
        $data->hp_sewa = $hp_sewa;
        $data->alamat_sewa = $alamat_sewa;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sewa = penyewaan::findOrFail($id);
        $sewa->delete();

        return 'berhasil di hapus';
    }
}
