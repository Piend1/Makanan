@extends('layout')

@section('content')
    <h1>Food</h1>
    <a href="{{ route('food.create') }}">+ Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Food</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                $no =1;
            ?>
            @foreach($foods as $food)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $food->food }}</td>
                <td>{{ $food->keterangan }}</td>
                <td>
                    <a href="{{ url("/food/{$food->id}") }}">Edit</a>
                    <form action="{{ url("/food/{$food->id}") }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection