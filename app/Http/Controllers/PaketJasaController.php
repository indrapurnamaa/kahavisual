<?php

namespace App\Http\Controllers;

//import Model "Post

use App\Models\PaketJasa;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class PaketJasaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $paketjasas = PaketJasa::latest()->paginate(5);

        //render view with posts
        return view('datapaketjasa.index', compact('paketjasas'));
    }


    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('paketjasa.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:5',
            'deskripsi'     => 'required|min:5',
            'harga'   => 'required|min:5',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/paketjasa', $gambar->hashName());

        //create post
        PaketJasa::create([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'harga'   => $request->harga,
            'gambar'     => $gambar->hashName()
        ]);

        //redirect to index
        return redirect()->route('datapaketjasa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $paketjasa = PaketJasa::findOrFail($id);

        //render view with post
        return view('paketjasa.show', compact('paketjasa'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $paketjasa = PaketJasa::findOrFail($id);

        //render view with post
        return view('paketjasa.edit', compact('paketjasa'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:5',
            'deskripsi'     => 'required|min:5',
            'harga'   => 'required|min:5',
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //get post by ID
        $paketjasa = PaketJasa::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/paketjasa', $gambar->hashName());

            //delete old image
            Storage::delete('public/posts/' . $paketjasa->gambar);

            //update post with new image
            $paketjasa->update([
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'harga'   => $request->harga,
                'gambar'     => $gambar->hashName()
            ]);
            
        } else {

            //update post without image
            $paketjasa->update([
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'harga'   => $request->harga,
            ]);
        }

        //redirect to index
        return redirect()->route('datapaketjasa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $paketjasa = PaketJasa::findOrFail($id);

        //delete image
        Storage::delete('public/paketjasa/'. $paketjasa->image);

        //delete post
        $paketjasa->delete();

        //redirect to index
        return redirect()->route('datapaketjasa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
