<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view('admin.matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matakuliah = new MataKuliah();
        $matakuliah->nama = $request->nama;
        $matakuliah->sks = $request->sks;
        $matakuliah->save();
        return redirect()->route('matakuliah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('admin.matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('admin.matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->nama = $request->nama;
        $matakuliah->sks = $request->sks;
        $matakuliah->save();
        return redirect()->route('matakuliah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->delete();
        return redirect()->route('matakuliah.index');
    }
}
