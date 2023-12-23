@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Transaction List</h1>
        <p><a href="{{ route('accounts.create') }}" class="btn btn-primary">New Transaction</a></p>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
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
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->nama }}</td>
                        <td>{{ $transaction->jenis }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
