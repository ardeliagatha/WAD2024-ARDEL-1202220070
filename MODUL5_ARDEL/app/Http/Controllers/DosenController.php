<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.show', compact('dosens'));
    }

    public function getCreateForm()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_dosen' => 'required|unique:dosens,kode_dosen|max:3',
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|unique:dosens,nip',
            'email' => 'required|email|unique:dosens,email',
            'no_telepon' => 'nullable|string|max:20',
        ]);

        Dosen::create($request->all());
        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function getEditForm($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_dosen' => 'required|max:3|unique:dosens,kode_dosen,' . $id,
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|unique:dosens,nip,' . $id,
            'email' => 'required|email|unique:dosens,email,' . $id,
            'no_telepon' => 'nullable|string|max:20',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return redirect()->route('dosens.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosens.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}