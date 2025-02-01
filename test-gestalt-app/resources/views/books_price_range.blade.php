<!-- resources/views/books_price_range.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Buku dengan Harga antara Rp. 2000 dan Rp. 6000</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booksPriceRange as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price_rent }}</td>
                    <td>{{ $book->book_category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection