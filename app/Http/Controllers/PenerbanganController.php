<?php

namespace App\Http\Controllers;

use App\Models\penerbangan;
use Illuminate\Http\Request;

class PenerbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Fungsinya untuk memanggil semua data penerbangan
        $penerbangan = Penerbangan::all(); //select * from penerbangan
        //passing data penerbangan ke views
        return view('penerbangan.index', compact('penerbangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan halaman create.blade.php
        return view('penerbangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(penerbangan $penerbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penerbangan $penerbangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penerbangan $penerbangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penerbangan $penerbangan)
    {
        //
    }
}
