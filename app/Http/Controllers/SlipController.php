<?php

namespace App\Http\Controllers;

use App\Models\Slip;
use Illuminate\Http\Request;

class SlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Slip::all();
        return view('pages.slip.index')->with([
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
        $items = Slip::all();
        return view('pages.slip.tambah')->with([
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
            'nama' => 'required|string',
            'keterangan' => 'required|string',
            'nama_barang' => 'required|string',
            'qty' => 'required|integer',
            'biaya' => 'required|integer',
            'tanggal' => 'required|date',
        ]);
        $data = $request->all();
        $data['total_biaya'] = $request->biaya * $request->qty;
        Slip::create($data);
        return redirect()->route('slip.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Slip::findOrFail($id);
        return view('pages.slip.detail')->with([
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
        $item = Slip::findOrFail($id);
        return view('pages.slip.edit')->with([
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
        $data['total_biaya'] = $request->biaya * $request->qty;
        $slip = Slip::findOrFail($id);
        $slip->update($data);
        return redirect()->route('slip.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slip::findOrFail($id)->delete();
        return redirect()->route('slip.index');
    }
}
