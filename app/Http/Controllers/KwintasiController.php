<?php

namespace App\Http\Controllers;

use App\Models\Kwitasi;
use Illuminate\Http\Request;

class KwintasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Kwitasi::all();
        return view('pages.kwitansi.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Kwitasi::all();
        return view('pages.kwitansi.tambah')->with([
            'items' => $items
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
            'id_slip' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'keterangan' => 'required|string',
            'biaya' => 'required|integer',
            'tanggal' => 'required|date',
        ]);
        $data = $request->all();
        Kwitasi::create($data);
        return redirect()->route('kwitansi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Kwitasi::findOrFail($id);
        return view('pages.kwitansi.detail')->with([
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Kwitasi::findOrFail($id);
        return view('pages.kwitansi.edit')->with([
            'item' => $item
        ]);
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
        $data = $request->all();
        $kwitansi = Kwitasi::findOrFail($id);
        $kwitansi->update($data);
        return redirect()->route('kwitansi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kwitasi::findOrFail($id)->delete();
        return redirect()->route('kwitansi.index');
    }
}
