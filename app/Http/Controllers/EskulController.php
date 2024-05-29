<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;
use Storage;

class EskulController extends Controller
{

    public function index()
    {
        $eskul = Eskul::latest()->paginate(5);
        return view('eskul.index', compact('eskul'));
    }

    public function create()
    {
        return view('eskul.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'eskul' => 'required|min:2',
            'deskripsi' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $eskul = new Eskul();
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/eskuls', $image->hashName());
        $eskul->image = $image->hashName();
        $eskul->save();
        return redirect()->route('eskul.index');
    }

    public function show($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.show', compact('eskul'));
    }

    public function edit($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.edit', compact('eskul'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'eskul' => 'required|min:2',
            'deskripsi' => 'required|min:2',
        ]);

        $eskul = Eskul::findOrFail($id);
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/eskuls', $image->hashName());
        //delete old image

        $eskul->image = $image->hashName();
        $eskul->save();
        return redirect()->route('eskul.index');

    }

    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->delete();
        return redirect()->route('eskul.index');

    }

    
}