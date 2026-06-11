<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function guestbooks()
    {
        $guestbooks = GuestBook::latest()->get();

        return view('admin.guestbooks', compact('guestbooks'));
    }

    public function users()
    {
        $users = User::latest()->get();

        return view('admin.users', compact('users'));
    }

    public function destroy($id)
    {
        $guestbook = GuestBook::findOrFail($id);

        $guestbook->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}