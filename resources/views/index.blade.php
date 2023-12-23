@extends('layouts.master')

@section('title', 'Halaman Utama')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Akun</h5>
                    <p class="card-text h2">{{ $jumlahDataAccount }}</p>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Accounts List</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr>
                                    <td>{{ $account->id }}</td>
                                    <td>{{ $account->nama }}</td>
                                    <td>{{ $account->jenis }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Jumlah Data Transaksi</h5>
                <p class="card-text h2">{{ $jumlahDataTransaksi }}</p>
            </div>
        </div>
    </div>
</div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Transaction List</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Nominal</th>
                                <th>Tujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->kategori }}</td>
                                    <td>{{ $transaction->nominal }}</td>
                                    <td>{{ $transaction->tujuan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="{{ route('transactions.index') }}" class="btn btn-primary">Ke Master Transaction</a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('accounts.index') }}" class="btn btn-primary">Ke Master Account</a>
        </div>
    </div>
@endsection
