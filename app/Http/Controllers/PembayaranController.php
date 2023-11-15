<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PembayaranController extends Controller
{
    public function index(): View
    {
        $pembayarans = Pembayaran::latest()->paginate(5);
        return view('pembayaran.index', compact('pembayarans'));
    }

    public function pembayaran($pesanan_id)
    {
        // Lakukan sesuatu dengan ID pesanan, misalnya, memproses pembayaran
        $pesanan = Pesanan::find($pesanan_id);

        $totalHarga = $pesanan->paket->harga;

        $dp = $totalHarga * 0.5;

        return view('pembayaran.pembayaran', compact('pesanan','totalHarga','dp'));
    }

    public function show(string $id): View
    {
        //get post by ID
        $pembayaran = Pembayaran::findOrFail($id);

        //render view with post
        return view('pembayaran.show', compact('pembayaran'));
    }

       public function edit(string $id): View
    {
        //get post by ID
        $pembayaran = Pembayaran::findOrFail($id);

        //render view with post
        return view('pembayaran.edit', compact('pembayaran'));
    }

    public function store(Request $request, $pesanan_id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'bukti_pembayaran' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $bukti_pembayaran->storeAs('public/pembayaran', $bukti_pembayaran->hashName());

        //Handle hitung total harga dan dp
        $pesanan = Pesanan::find($pesanan_id);
        $totalHarga = $pesanan->paket->harga;
        $dp = $totalHarga * 0.5;

        $pembayaran = new Pembayaran();
        $pembayaran->pesanan_id = $pesanan_id;
        $pembayaran->bukti_pembayaran = $bukti_pembayaran->hashName();
        $pembayaran->total_harga = $pesanan->paket->harga;
        $pembayaran->dp = $dp;
        $pembayaran->sisa_pembayaran = $totalHarga - $dp;
        $pembayaran->status = 'Menunggu Konfirmasi';
        $pembayaran->save();

        //redirect to index
        return redirect()->route('riwayatpesanan')->with(['success' => 'Upload berhasil, silahkan tunggu konfirmasi dari admin.']);
    }


    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'status'     => 'required',
        ]);

        //get post by ID
        $pembayaran = Pembayaran::findOrFail($id);

        //update post with new image
        $pembayaran->update([
            'status'     => $request->status,
        ]);

        //redirect to index
        return redirect()->route('pembayaran.index')->with(['success' => 'Status Berhasil diubah!']);
    }
}
