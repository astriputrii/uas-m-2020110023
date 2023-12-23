@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Account List</h1>
        <p><a href="{{ route('accounts.create') }}" class="btn btn-primary">New Accounts</a></p>
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
@endsection
