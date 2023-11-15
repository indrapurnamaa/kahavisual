<?php

namespace App\Http\Controllers;

use App\Models\PaketJasa;
use App\Models\Pembayaran;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class PesananController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $pesanans = Pesanan::latest()->paginate(5);

        //render view with posts
        return view('pesanan.index', compact('pesanans'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $paketjasas = PaketJasa::all();
        return view('pesanan.create',compact('paketjasas'));
    }

    // public function getpaketId($paket_id)
    // {
    //     // Lakukan sesuatu dengan ID pesanan, misalnya, memproses pembayaran
    //     $paket = PaketJasa::find($paket_id);

    //     return view('pesanan.create', compact('paket'));
    // }

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
            'paket_id' => 'required',
            'tgl_acara'     => 'required',
            'jam_acara'     => 'required',
        ]);

        $paket_id = $request->input('paket_id');
        $tgl_acara = $request->input('tgl_acara');
        $jam_acara = $request->input('jam_acara');
        $pesanan = new Pesanan();
        $pesanan->paket_id = $paket_id;
        $pesanan->tgl_acara = $tgl_acara;
        $pesanan->jam_acara = $jam_acara;
        $pesanan->pelanggan_id = Auth::guard('pelanggan')->user()->id;
        // $pesanan->admin_id = Auth::guard('admin')->user()->id;
        $pesanan->save();

        //redirect to index
        return redirect()->route('riwayatpesanan')->with(['success' => 'Pesanan berhasil ditambahkan']);
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
        $pesanan = Pesanan::findOrFail($id);

        //render view with post
        return view('pesanan.show', compact('pesanan'));
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
        $pesanan = Pesanan::findOrFail($id);

        //render view with post
        return view('pesanan.edit', compact('pesanan'));
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
            'tgl_acara'     => 'required',
            'jam_acara'     => 'required',
        ]);

        //get post by ID
        $pesanan = Pesanan::findOrFail($id); {

            //update post without image
            $pesanan->update([
                'tgl_acara'     => $request->tgl_acara,
                'jam_acara'     => $request->jam_acara,
            ]);
        }

        //redirect to index
        return redirect()->route('pesanan.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $pesanan = Pesanan::findOrFail($id);

        //delete post
        $pesanan->delete();

        //redirect to index
        return redirect()->route('pesanan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function riwayatPesanan()
    {
        $pelanggan = Auth::guard('pelanggan')->user();
        $riwayatPesanan = Pesanan::where('pelanggan_id', $pelanggan->id)->get();
        // $pembayaran = Pembayaran::where('pesanan_id')->get();
        return view('pesanan.riwayat', compact('riwayatPesanan'));
    }
}
