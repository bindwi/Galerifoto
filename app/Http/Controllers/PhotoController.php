<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
    public function index()
{
    $photos = Photo::all(); // Mengambil semua data dari model Photo
    return view('photos.index', compact('photos')); // Mengirim variabel $photos ke view
}

public function create()
{
    return view('photos.create');
}

public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Menyimpan file gambar ke folder 'photos' di storage
    $imagePath = $request->file('image')->store('photos', 'public');

    // Menyimpan data ke database
    Photo::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'image_url' => $imagePath, // Menggunakan path gambar yang sudah disimpan
    ]);

    return redirect()->route('photos.index')->with('success', 'Foto berhasil ditambahkan.');
}

public function edit($id)
{
    $photo = Photo::findOrFail($id);
    return view('photos.edit', compact('photo'));
}

public function update(Request $request, $id)
{
    $photo = Photo::findOrFail($id);

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Hapus file lama
        if ($photo->image_url && file_exists(storage_path('app/public/' . $photo->image_url))) {
            unlink(storage_path('app/public/' . $photo->image_url));
        }

        // Simpan file baru
        $validatedData['image_url'] = $request->file('image')->store('photos', 'public');
    }

    $photo->update($validatedData);

    return redirect()->route('photos.index')->with('success', 'Foto berhasil diperbarui.');
}


public function destroy($id)
{
    $photo = Photo::findOrFail($id);

    // Hapus file gambar
    if ($photo->image_url && file_exists(storage_path('app/public/' . $photo->image_url))) {
        unlink(storage_path('app/public/' . $photo->image_url));
    }

    $photo->delete();

    return redirect()->route('photos.index')->with('success', 'Foto berhasil dihapus.');
}

    
}
