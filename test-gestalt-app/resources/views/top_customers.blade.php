<!-- resources/views/top_customers.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Pelanggan yang Telah Menyewa Lebih dari 10 Buku</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>ID Card</th>
                <th>Address</th>
                <th>Books Rented</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topCustomers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->identity_card_number }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->books_rented }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection