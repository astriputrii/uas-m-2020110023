@extends('layouts.master')

@section('content')
    <h2>Registrasi Transaction</h2>
    <form method="POST" action="/transaction">
        @csrf
        <div>
            <label for="name">Nama</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Daftar</button>
    </form>
@endsection
