@extends('layouts.app')

@section('title', 'Dashboard E-Wallet')

@section('content')
<div class="container py-4">
    
    <!-- Header & Tombol -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="{{ route('kelompok.index') }}" class="btn btn-outline-secondary btn-sm rounded-pill mb-2">← Kembali ke Profil</a>
            <h2 class="fw-bold mb-0">DompetKu Wallet</h2>
        </div>
        <a href="{{ route('ewallet.create') }}" class="btn btn-primary rounded-pill px-4">+ Tambah Transaksi</a>
    </div>

    <!-- Kartu Statistik (Hanya Muncul 1 Kali) -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-success text-white p-4">
                <small>Total Pemasukan</small>
                <h3 class="fw-bold mb-0">Rp {{ number_format($totalMasuk, 0, ',', '.') }}</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-danger text-white p-4">
                <small>Total Pengeluaran</small>
                <h3 class="fw-bold mb-0">Rp {{ number_format($totalKeluar, 0, ',', '.') }}</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-primary text-white p-4">
                <small>Saldo Saat Ini</small>
                <h3 class="fw-bold mb-0">Rp {{ number_format($saldo, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>

    <!-- Tabel Transaksi (HANYA SATU KALI LOOPING) -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0 align-middle">
                <thead class="bg-light">
                    <tr>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Tipe</th>
                        <th>Nominal</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($transaksis as $t)
                    <tr>
                        <td>{{ $t->tanggal_transaksi->format('d M Y') }}</td>
                        <td>{{ $t->keterangan }}</td>
                        <td>
                            <span class="badge {{ $t->tipe == 'pemasukan' ? 'bg-success' : 'bg-danger' }}">
                                {{ ucfirst($t->tipe) }}
                            </span>
                        </td>
                        <td class="fw-bold {{ $t->tipe == 'pemasukan' ? 'text-success' : 'text-danger' }}">
                            {{ $t->tipe == 'pemasukan' ? '+' : '-' }} Rp {{ number_format($t->nominal, 0, ',', '.') }}
                        </td>
                        <td class="text-end">
                            <a href="{{ route('ewallet.edit', $t) }}" class="btn btn-sm btn-outline-warning me-1">Edit</a>
                            <form action="{{ route('ewallet.destroy', $t) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center py-4 text-muted">Belum ada transaksi</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination (Hanya Muncul 1 Kali di Bawah) -->
        <div class="card-footer bg-white border-0 py-3">
            {{ $transaksis->links() }}
        </div>
    </div>

</div>
@endsection