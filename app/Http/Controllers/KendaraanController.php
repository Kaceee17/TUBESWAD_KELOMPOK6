<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreKendaraanRequest;
use App\Http\Requests\UpdateKendaraanRequest;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : view
    {
        return view('kendaraans.index', [
            'kendaraans' => Kendaraan::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : view
    {
        return view('kendaraans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKendaraanRequest $request) : RedirectResponse
    {
        Kendaraan::create($request->all());
        return redirect()->route('kendaraans.index')
                ->withSuccess('Kendaraan Baru Telah Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan) : view
    {
        return view('kendaraans.show', [
            'kendaraan' => $kendaraan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan) : view
    {
        return view('kendaraans.edit', [
            'kendaraan' => $kendaraan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKendaraanRequest $request, Kendaraan $kendaraan) : RedirectResponse
    {
        $kendaraan->update($request->all());
        return redirect()->back()
                ->withSuccess('Kendaraan Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan) : RedirectResponse
    {
        $kendaraan->delete();
        return redirect()->route('kendaraans.index')
                    ->withSuccess('Kendaraan Berhasil Dihapus.');
    }
}
