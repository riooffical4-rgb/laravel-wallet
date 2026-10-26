@extends('layouts.app')
@section('title', 'Edit Transaksi')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-warning text-dark py-3">
                <h5 class="mb-0 fw-bold">✏️ Edit Transaksi</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('ewallet.update', $transaksi) }}" method="POST">
                    @csrf @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" 
                               value="{{ old('keterangan', $transaksi->keterangan) }}" required>
                        @error('keterangan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tipe Transaksi</label>
                            <select name="tipe" class="form-select @error('tipe') is-invalid @enderror" required>
                                <option value="pemasukan" {{ old('tipe', $transaksi->tipe) == 'pemasukan' ? 'selected' : '' }}>💰 Pemasukan</option>
                                <option value="pengeluaran" {{ old('tipe', $transaksi->tipe) == 'pengeluaran' ? 'selected' : '' }}>💸 Pengeluaran</option>
                            </select>
                            @error('tipe') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nominal (Rp)</label>
                            <input type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror" 
                                   value="{{ old('nominal', $transaksi->nominal) }}" min="1" step="100" required>
                            @error('nominal') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Tanggal Transaksi</label>
                        <input type="date" name="tanggal_transaksi" class="form-control @error('tanggal_transaksi') is-invalid @enderror" 
                               value="{{ old('tanggal_transaksi', $transaksi->tanggal_transaksi->format('Y-m-d')) }}" required>
                        @error('tanggal_transaksi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning flex-grow-1 fw-semibold text-dark">Update Transaksi</button>
                        <a href="{{ route('ewallet.index') }}" class="btn btn-outline-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection