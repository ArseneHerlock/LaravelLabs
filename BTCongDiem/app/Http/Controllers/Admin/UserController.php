<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('admin.users.index');
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        User::find($id)->update($request->all());
        return redirect()->route('admin.users.index');
    }

    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('admin.users.index');
    }
}
