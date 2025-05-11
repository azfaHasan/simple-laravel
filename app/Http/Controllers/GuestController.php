<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guest = Guest::latest()->get();
        return view('guest.index', compact('guest'));
    }

    public function create()
    {
        return view('guest.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'message'=>'required'
        ]);

        Guest::create($request->all());
        return redirect()->route('guest.index')->with('success', 'data berhasil dikirim');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $guest = Guest::findOrFail($id);
        return view('guest.edit', compact('guest'));
    }

    public function update(Request $request, string $id)
    {
        $guest = Guest::findOrFail($id);
        
        $request->validate([
            'name'=>'required',
            'message'=>'required'
        ]);
        
        $guest->update($request->all());
        return redirect()->route('guest.index')->with('success', 'data berhasil diupdate');
    }
    
    public function destroy(string $id)
    {
        $guest = Guest::findOrFail($id);

        $guest->delete();
        return redirect()->route('guest.index')->with('success', 'data berhasil dihapus');
    }
}
