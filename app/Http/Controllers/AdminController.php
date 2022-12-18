<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::latest();

        if (request('search')) {
            $items->where('name', 'like', '%' . request('search') . '%');
        }

        return view('.admin.list-products', [
            "items" => $items->paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('.admin.form-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'released' => 'required',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/assets/image', $image->hashName());

        $item = Item::create([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'image'       => $image->hashName(),
            'released'    => $request->released,
            'quantity'    => '0',
        ]);

        if ($item) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('.admin.edit-product', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,svg',
            'released' => 'required',
        ]);

        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/assets/image', $image->hashName());

            //delete old image
            Storage::delete('public/assets/image/' . $item->image);

            //update post with new image
            $item->update([
                'name'        => $request->name,
                'description' => $request->description,
                'price'       => $request->price,
                'image'       => $image->hashName(),
                'released'    => $request->released,
            ]);
        } else {

            //update post without image
            $item->update([
                'name'        => $request->name,
                'description' => $request->description,
                'price'       => $request->price,
                'released'    => $request->released,
            ]);
        }
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item = Item::findOrFail($item->id);
        Storage::disk('local')->delete('public/assets/image/' . $item->image);
        $item->delete();

        if ($item) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
