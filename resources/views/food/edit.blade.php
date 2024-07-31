@extends('layout')

@section('content')
    <h1>Edit Food</h1>

    <form action=" {{ route('food.update', $food->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="food">Food</label>
            <input type="text" name="food" id="food" placeholder="Aktifitas" value="{{ $food->food }}" required>
        </div>
        <br>
        <div>
            <label for="food">Keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="Keterangan Aktifitas" required>{{ $food->keterangan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection

