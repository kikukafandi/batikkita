<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Default query: produk terbaru
        $query = Product::latest();

        // Filter kategori
        if ($request->filled('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        // Filter harga
        if ($request->filled('price')) {
            if ($request->price == 'low') {
                $query->where('price', '<', 200000);
            } elseif ($request->price == 'mid') {
                $query->whereBetween('price', [200000, 400000]);
            } elseif ($request->price == 'high') {
                $query->where('price', '>', 400000);
            }
        }

        // Urutan (sorting)
        if ($request->filled('sort')) {
            if ($request->sort == 'low_price') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort == 'high_price') {
                $query->orderBy('price', 'desc');
            } else {
                $query->latest(); // default: terbaru
            }
        }

        // Ambil data dengan pagination (9 produk per halaman)
        $products = $query->paginate(9);
        // Kirim ke view
        return view('products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("seller.add-product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image'       => 'required|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'seller_id'   => 1,
            'name'        => $validated['name'],
            'category'    => $validated['category'],
            'description' => $validated['description'],
            'price'       => $validated['price'],
            'stock'       => $validated['stock'],
            'image'       => $imagePath,
            // mockup_preview dikosongkan, akan dipakai di sisi pembeli
        ]);

        return redirect()
            ->route('seller.dashboard')
            ->with('success', 'Produk berhasil ditambahkan!');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Ambil produk berdasarkan ID
        $product = Product::with('seller')->findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->load('seller');
        return view('seller.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:5120'
        ]);

        // Jika ada file baru, simpan
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        // Update data produk
        $product->update($validated);

        return redirect()
            ->route('seller.dashboard')
            ->with('success', 'Produk berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function trial(Request $request)
    {
        $request->validate([
            'user_photo' => 'required|image|max:5120',
            'product_image' => 'required|string',
        ]);

        $userPhotoPath = $request->file('user_photo')->store('trial_uploads', 'public');

        $productImagePath = storage_path('app/public/' . $request->product_image);

        $img = Image::make(storage_path('app/public/' . $userPhotoPath));

        $motif = Image::make($productImagePath)->resize($img->width(), $img->height());

        $motif->opacity(40);

        $img->insert($motif, 'center');

        $outputPath = 'trial_results/' . uniqid() . '.jpg';
        \Illuminate\Support\Facades\Storage::disk('public')->put($outputPath, (string) $img->encode());

        return back()->with('mockup', $outputPath);
    }
}
