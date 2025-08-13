<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'             => 'required|string',
            'image_dokumentasi' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_dokumentasi')) {
            $path = $request->file('image_dokumentasi')->store('galleries', 'public');
            $validatedData['image_dokumentasi'] = $path;
        }

        Gallery::create($validatedData);
        return redirect()->route('galleries.index')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galleries.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validatedData = $request->validate([
            'title'             => 'required|string',
            'image_dokumentasi' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image_dokumentasi')) {
            $path = $request->file('image_dokumentasi')->store('galleries', 'public');
            $validatedData['image_dokumentasi'] = $path;
        }

        $gallery->update($validatedData);
        return redirect()->route('galleries.index')->with('success', 'Foto berhasil diupdate!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Foto berhasil dihapus!');
    }
}
