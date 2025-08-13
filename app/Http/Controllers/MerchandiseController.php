<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandise = Merchandise::all();
        return view('merchandise.index', compact('merchandise'));
    }

    public function create()
    {
        return view('merchandise.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'        => 'required|string',
            'price'       => 'required|numeric',
            'description' => 'required|string',
            'image_merch' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_merch')) {
            $path = $request->file('image_merch')->store('merchandise', 'public');
            $validatedData['image_merch'] = $path;
        }

        Merchandise::create($validatedData);
        return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil ditambahkan!');
    }

    public function show($id)
    {
        $item = Merchandise::findOrFail($id);
        return view('merchandise.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Merchandise::findOrFail($id);
        return view('merchandise.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Merchandise::findOrFail($id);

        $validatedData = $request->validate([
            'name'        => 'required|string',
            'price'       => 'required|numeric',
            'description' => 'required|string',
            'image_merch' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image_merch')) {
            $path = $request->file('image_merch')->store('merchandise', 'public');
            $validatedData['image_merch'] = $path;
        }

        $item->update($validatedData);
        return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil diupdate!');
    }

    public function destroy($id)
    {
        $item = Merchandise::findOrFail($id);
        $item->delete();
        return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil dihapus!');
    }
}
