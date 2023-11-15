<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class PelangganController extends Controller
{
    public function index(): View
    {
        //get posts
        $pelanggans = Pelanggan::latest()->paginate(5);

        $users = User::all();

        //render view with posts
        return view('pelanggan.index', compact('pelanggans', 'users'));
    }

    public function create(): View
    {
        return view('pelanggan.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'username'     => 'required|min:5',
            'password'   => 'required|min:5',
            'email'   => 'required|email',
            'nama'   => 'required',
            'telepon'   => 'required',
            'alamat'   => 'required',
        ]);

        //create post
        Pelanggan::create([
            'username'   => $request->username,
            'password' => Hash::make($request['password']),
            'email' => $request->email,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,


        ]);

        //redirect to index
        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $pelanggan = Pelanggan::findOrFail($id);

        //render view with post
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $pelanggan = Pelanggan::findOrFail($id);

        //render view with post
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'username'     => 'required|min:5',
            'password'   => 'required|min:5',
            'email'   => 'required|email',
            'nama'   => 'required',
            'telepon'   => 'required',
            'alamat'   => 'required',
        ]);

        //get post by ID
        $pelanggan = Pelanggan::findOrFail($id);

        //update post with new image
        $pelanggan->update([
            'username'   => $request->username,
            'password' => Hash::make($request['password']),
            'email' => $request->email,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $pelanggan = Pelanggan::findOrFail($id);

        //delete post
        $pelanggan->delete();

        //redirect to index
        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
