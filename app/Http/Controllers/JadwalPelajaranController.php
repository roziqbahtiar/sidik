<?php

namespace App\Http\Controllers;

use App\Http\Requests\JadwalPelajaranRequest;
use App\Http\Controllers\Controller;
use App\JadwalPelajaran;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jadwalPelajaran.index', ['jadwalPelajarans' => JadwalPelajaran::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwalPelajaran.create', ['jadwalPelajaran' => new JadwalPelajaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalPelajaranRequest $request)
    {
        JadwalPelajaran::create($request->all());
        return redirect('/jadwalPelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalPelajaran $jadwalPelajaran)
    {
        return view('jadwalPelajaran.show', ['jadwalPelajaran' => $jadwalPelajaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalPelajaran $jadwalPelajaran)
    {
        return view('jadwalPelajaran.edit', ['jadwalPelajaran' => $jadwalPelajaran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JadwalPelajaranRequest $request, JadwalPelajaran $jadwalPelajaran)
    {
        $jadwalPelajaran->update($request->all());
        return redirect('/jadwalPelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalPelajaran $jadwalPelajaran)
    {
        $jadwalPelajaran->delete();
        return redirect('/jadwalPelajaran');
    }
}
