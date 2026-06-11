<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function index()
    {
        $guestbooks = GuestBook::where('user_id', auth()->id())->latest()->get();

        return view('user.guestbook', compact('guestbooks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pesan' => 'required'
        ]);

        GuestBook::create([
            'user_id' => auth()->id(),
            'nama' => $request->nama,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Buku tamu berhasil dikirim');
    }
}