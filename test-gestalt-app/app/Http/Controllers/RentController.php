<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Customer;
use App\Models\Rent;
use DB;

// app/Http/Controllers/RentController.php
class RentController extends Controller
{
    // Menampilkan buku yang disewa
    public function showRentedBooks()
    {
        $rentedBooks = Buku::join('rent', 'buku.id', '=', 'rent.book_id')
            ->select('buku.title', 'buku.author', 'buku.price_rent', 'buku.book_category')
            ->get();

        return view('rented_books', compact('rentedBooks'));
    }

    // Menampilkan buku yang tidak pernah disewa
    public function showNeverRentedBooks()
    {
        $neverRentedBooks = Buku::whereNotIn('id', Rent::select('book_id'))
            ->get();

        return view('never_rented_books', compact('neverRentedBooks'));
    }

    // Menampilkan buku yang memiliki harga antara Rp. 2000 dan Rp. 6000
    public function showBooksPriceRange()
    {
        $booksPriceRange = Buku::where('price_rent', '>', 2000)  // Lebih dari 2000
                            ->where('price_rent', '<', 6000)  // Kurang dari 6000
                            ->get();

        return view('books_price_range', compact('booksPriceRange'));
    }

    // Menampilkan pelanggan yang telah menyewa lebih dari 10 buku
    public function showTopCustomers()
    {
        $topCustomers = Customer::join('rent', 'customer.id', '=', 'rent.customer_id')
            ->select(
                'customer.id', 
                'customer.name', 
                'customer.identity_card_number', 
                'customer.address', 
                DB::raw('COUNT(rent.book_id) as books_rented')
            )
            ->groupBy('customer.id', 'customer.name', 'customer.identity_card_number', 'customer.address')
            ->havingRaw('COUNT(rent.book_id) >= ?', [10]) // 👈 Ganti alias dengan fungsi COUNT langsung
            ->get();

        return view('top_customers', compact('topCustomers'));
    }
}

