<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonHang;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DonHang::with('user')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.orders.create', compact('users'));
    }

    public function store(Request $request)
    {
        DonHang::create($request->all());
        return redirect()->route('admin.orders.index');
    }

    public function edit(string $id)
    {
        $order = DonHang::find($id);
        $users = User::all();
        return view('admin.orders.edit', compact('order', 'users'));
    }

    public function update(Request $request, string $id)
    {
        DonHang::find($id)->update($request->all());
        return redirect()->route('admin.orders.index');
    }

    public function destroy(string $id)
    {
        DonHang::destroy($id);
        return redirect()->route('admin.orders.index');
    }
}
