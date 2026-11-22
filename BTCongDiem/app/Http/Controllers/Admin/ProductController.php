<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\sanpham2001230023;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = sanpham2001230023::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($filename = $this->uploadImage($request)) {
            $data['hinh'] = $filename;
        }

        sanpham2001230023::create($data);
        return redirect()->route('admin.products.index');
    }

    public function edit(string $id)
    {
        $product = sanpham2001230023::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $product = sanpham2001230023::find($id);
        $data = $request->all();

        if ($filename = $this->uploadImage($request)) {
            $data['hinh'] = $filename;
        } else {
            unset($data['hinh']);
        }

        $product->update($data);
        return redirect()->route('admin.products.index');
    }

    public function destroy(string $id)
    {
        sanpham2001230023::destroy($id);
        return redirect()->route('admin.products.index');
    }

    private function uploadImage(Request $request): ?string
    {
        if (! $request->hasFile('hinh')) {
            return null;
        }

        $file = $request->file('hinh');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        return $filename;
    }
}
