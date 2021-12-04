<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pengeluaran::all();
        return view('pages.pengeluaran.index')->with([
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
        $items = Pengeluaran::all();
        return view('pages.pengeluaran.tambah')->with([
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
            'id_kwitansi' => 'required|integer',
            'tanggal' => 'required|date',
            'keterangan' => 'required|string',
            'biaya' => 'required|integer',
        ]);
        $data = $request->all();
        Pengeluaran::create($data);
        return redirect()->route('pengeluaran.index');
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
        $item = Pengeluaran::findOrFail($id);
        return view('pages.pengeluaran.edit')->with([
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
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->update($data);
        return redirect()->route('pengeluaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengeluaran::findOrFail($id)->delete();
        return redirect()->route('pengeluaran.index');
    }
}
