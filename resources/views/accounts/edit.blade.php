@extends('layouts.master')
@section('content')
    <h2>Edit Account</h2>
    <form method="POST" action="/data/{{ $data->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $data->name }}" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $data->email }}" required>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
