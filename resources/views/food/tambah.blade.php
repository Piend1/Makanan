@extends('layout')

@section('content')
    <h1>Tambah Food</h1>

    <form action="{{ route('food.store') }}" method=post>
        @csrf
        <div>
            <label for="food">Food</label>
            <input type="text" name="food" id="food" placeholder="Nama Manakan" required>
        </div>
        <br>
        <div>
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" id="keterangan" placeholder="Keterangan Makanan" required></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection