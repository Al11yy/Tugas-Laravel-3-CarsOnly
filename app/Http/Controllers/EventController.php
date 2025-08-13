<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'       => 'required|string',
            'date'        => 'required|date',
            'location'    => 'required|string',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('events', 'public');
            $validatedData['cover_image'] = $path;
        }

        Event::create($validatedData);
        return redirect()->route('events.index')->with('success', 'Event berhasil ditambahkan!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validatedData = $request->validate([
            'title'       => 'required|string',
            'date'        => 'required|date',
            'location'    => 'required|string',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('events', 'public');
            $validatedData['cover_image'] = $path;
        }

        $event->update($validatedData);
        return redirect()->route('events.index')->with('success', 'Event berhasil diupdate!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus!');
    }
}
