<!-- resources/views/never_rented_books.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Buku yang Tidak Pernah Disewa</h1>
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
            @foreach ($neverRentedBooks as $book)
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