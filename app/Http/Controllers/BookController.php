<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
    {

        $query = \App\Models\Book::with('category');
        

        $categories = \App\Models\Category::all();

        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('judul', 'like', '%' . $searchTerm . '%')
                  ->orWhere('isbn', 'like', '%' . $searchTerm . '%');
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $books = $query->get();
        
        return view('admin.catalog', compact('books', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = \App\Models\Category::all();
        $publishers = \App\Models\Publisher::all();
        return view('admin.books.create', compact('categories', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        // Data di bawah ini sudah pasti valid karena sudah melewati StoreBookRequest
        $validated = $request->validated();

        \App\Models\Book::create($validated);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
