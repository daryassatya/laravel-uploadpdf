<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mahasiswa.index', [
            'title' => 'List Mahasiwa',
            'mahasiswa' => Mahasiswa::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mahasiswa.create', [
            'title' => 'Create Mahasiwa',
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
        //
        // dd($request->file('image')->getClientOriginalName());
        $request->validate([
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required|date',
            'program_studi' => 'required|max:255',
            'nim' => 'required|max:255',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        // ddd($request);

        try {
            //code...

            $mahasiswa = new Mahasiswa();
            $mahasiswa->nama = $request->nama;
            $mahasiswa->tgl_lahir = $request->tgl_lahir;
            $mahasiswa->nim = $request->nim;
            $mahasiswa->program_studi = $request->program_studi;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->foto = $request->file('image')->storeAs('foto-mahasiswa', $request->file('image')->getClientOriginalName());
            // $mahasiswa->foto = $request->file('image')->store('foto-mahasiswa');
            $mahasiswa->save();

            return redirect()->route('dashboard.mahasiswa.index')->with(['success' => 'Mahasiswa added successfully!']);

        } catch (\Throwable$th) {
            //throw $th;
            return redirect()->route('dashboard.mahasiswa.index')->with(['failed' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return view('dashboard.mahasiswa.show', [
            'title' => 'Mahasiswa | ' . $mahasiswa->nama,
            'mahasiswa' => $mahasiswa,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return view('dashboard.mahasiswa.edit', [
            'title' => 'Edit | ' . $mahasiswa->nama,
            'mahasiswa' => $mahasiswa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required|date',
            'program_studi' => 'required|max:255',
            'nim' => 'required|max:255',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        try {
            //code...

            $mahasiswa = Mahasiswa::where('nim', $nim)->first();
            $mahasiswa->nama = $request->nama;
            $mahasiswa->tgl_lahir = $request->tgl_lahir;
            $mahasiswa->nim = $request->nim;
            $mahasiswa->program_studi = $request->program_studi;
            $mahasiswa->alamat = $request->alamat;

            if ($request->file('image')) {
                if ($mahasiswa->foto) {
                    Storage::delete($mahasiswa->foto);
                }
                $mahasiswa->foto = $request->file('image')->storeAs('foto-mahasiswa', $request->file('image')->getClientOriginalName());
            }

            // $mahasiswa->foto = $request->file('image')->store('foto-mahasiswa');
            $mahasiswa->save();

            return redirect()->route('dashboard.mahasiswa.index')->with(['success' => 'Mahasiswa edited successfully!']);

        } catch (\Throwable$th) {
            //throw $th;
            return redirect()->route('dashboard.mahasiswa.index')->with(['failed' => $th->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        try {
            $mahasiswa = Mahasiswa::where('nim', $nim)->first();
            if ($mahasiswa->foto) {
                Storage::delete($mahasiswa->foto);
            }

            Mahasiswa::destroy($mahasiswa->id);
            return redirect()->route('dashboard.mahasiswa.index')->with(['success' => "Mahasiswa $mahasiswa->nama has been deleted!"]);
        } catch (\Throwable$th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }
    }
}
