<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Penjual;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    // Menampilkan semua transaksi
    public function index()
    {
        // Mengambil semua transaksi dengan relasi ke pembeli dan penjual
        $transaksi = Transaksi::with(['pembeli', 'penjual'])->get();

        return view('transaksi.index', compact('transaksi'));
    }

    // Membuat transaksi baru
    public function create()
    {
        $pembeli = Pembeli::all();
        $penjual = Penjual::all();

        return view('transaksi.create', compact('pembeli', 'penjual'));
    }

    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembeli,id_pembeli',
            'penjual_id' => 'required|exists:penjual,id_penjual',
            'jumlah_transaksi' => 'required|integer',
            'status_transaksi' => 'required|string',
            'metode_pembayaran' => 'required|string',
        ]);

        Transaksi::create([
            'pembeli_id' => $request->pembeli_id,
            'penjual_id' => $request->penjual_id,
            'jumlah_transaksi' => $request->jumlah_transaksi,
            'status_transaksi' => $request->status_transaksi,
            'metode_pembayaran' => $request->metode_pembayaran,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    // Menampilkan detail transaksi
    public function show($id)
    {
        $transaksi = Transaksi::with(['pembeli', 'penjual'])->findOrFail($id);

        return view('transaksi.show', compact('transaksi'));
    }

    // Form edit transaksi
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembeli = Pembeli::all();
        $penjual = Penjual::all();

        return view('transaksi.edit', compact('transaksi', 'pembeli', 'penjual'));
    }

    // Update transaksi
    public function update(Request $request, $id)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembeli,id_pembeli',
            'penjual_id' => 'required|exists:penjual,id_penjual',
            'jumlah_transaksi' => 'required|integer',
            'status_transaksi' => 'required|string',
            'metode_pembayaran' => 'required|string',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update([
            'pembeli_id' => $request->pembeli_id,
            'penjual_id' => $request->penjual_id,
            'jumlah_transaksi' => $request->jumlah_transaksi,
            'status_transaksi' => $request->status_transaksi,
            'metode_pembayaran' => $request->metode_pembayaran,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diupdate.');
    }

    // Hapus transaksi
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
