@extends('layouts.master')

@section('title', 'Daftar Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Transaksi</h2>
            <p><a href="{{ route('accounts.create') }}" class="btn btn-primary">Create a New Account</a></p>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaction as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->nama }}</td>
                            <td>{{ $transaction->jenis }}</td>
                            <td>
                                <a href="{{ route('transaksi.edit', $transactions->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus Akun ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Data tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali ke Halaman Utama</a>
        </div>
    </div>
@endsection