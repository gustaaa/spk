<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use Illuminate\Http\Request;
use App\Models\alternatif;
use App\Models\kriteria;
use Maatwebsite\Excel\Facades\Excel;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        // dd($request->file('file'));
        Excel::import(new DataImport, $request->file('file'));

        return redirect()->route('alternatif.index')->with('success', 'Data Berhasil di ditambahkan');
    }

    public function index()
    {
        //
        $kriteria = kriteria::orderby('id', 'asc')->get();
        $mapel = alternatif::orderby('created_at', 'desc')->get();
        return view('admin.alternatif.index', compact('kriteria', 'mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.alternatif.create');
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
        $this->validate($request, [
            'nama' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
            'C6' => 'required',
            'C7' => 'required',
            'C8' => 'required',
            'C9' => 'required',
            'C10' => 'required',
            'C11' => 'required',
            'C12' => 'required',
        ]);

        $mapel = alternatif::create([
            'nama' => $request->nama,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5,
            'C6' => $request->C6,
            'C7' => $request->C7,
            'C8' => $request->C8,
            'C9' => $request->C9,
            'C10' => $request->C10,
            'C11' => $request->C11,
            'C12' => $request->C12,
        ]);

        return redirect()->route('alternatif.index')->with('success', 'Data berhasil disimpan');
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
        //
        $mapel = alternatif::findorfail($id);
        return view('admin.alternatif.edit', compact('mapel'));
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
        //
        $this->validate($request, [
            'nama' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
            'C6' => 'required',
            'C7' => 'required',
            'C8' => 'required',
            'C9' => 'required',
            'C10' => 'required',
            'C11' => 'required',
            'C12' => 'required',
        ]);

        $mapel = [
            'nama' => $request->nama,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5,
            'C6' => $request->C6,
            'C7' => $request->C7,
            'C8' => $request->C8,
            'C9' => $request->C9,
            'C10' => $request->C10,
            'C11' => $request->C11,
            'C12' => $request->C12,
        ];

        alternatif::whereId($id)->update($mapel);

        return redirect()->route('alternatif.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mapel = alternatif::findorfail($id);
        $mapel->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}