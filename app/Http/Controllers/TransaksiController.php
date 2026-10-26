<?php
namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller {
    
    // READ + KALKULASI SALDO OTOMATIS
    public function index() {
        $transaksis = Transaksi::latest()->paginate(25);
        
        // Hitung total pakai Eloquent sum() dari SELURUH database
        $totalMasuk = Transaksi::where('tipe', 'pemasukan')->sum('nominal');
        $totalKeluar = Transaksi::where('tipe', 'pengeluaran')->sum('nominal');
        $saldo = $totalMasuk - $totalKeluar;

        return view('ewallet.index', compact(
            'transaksis', 'totalMasuk', 'totalKeluar', 'saldo'
        ));
    }

    // CREATE FORM
    public function create() {
        return view('ewallet.create');
    }

    // STORE DATA
    public function store(Request $request) {
        $request->validate([
            'keterangan' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:1',
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'tanggal_transaksi' => 'required|date'
        ]);
        Transaksi::create($request->all());
        return redirect()->route('ewallet.index')->with('success', 'Transaksi berhasil disimpan!');
    }

    // EDIT FORM
    public function edit(Transaksi $transaksi) {
        return view('ewallet.edit', compact('transaksi'));
    }

    // UPDATE DATA
    public function update(Request $request, Transaksi $transaksi) {
        $request->validate([
            'keterangan' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:1',
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'tanggal_transaksi' => 'required|date'
        ]);
        $transaksi->update($request->all());
        return redirect()->route('ewallet.index')->with('success', 'Data berhasil diperbarui!');
    }

    // DELETE DATA
    public function destroy(Transaksi $transaksi) {
        $transaksi->delete();
        return redirect()->route('ewallet.index')->with('success', 'Transaksi dihapus!');
    }
}