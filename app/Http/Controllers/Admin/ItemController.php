<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        //SELECT * FROM items;
        $items = Item::get();
        $data = ['items' => $items];
        return view('admin.item.index', $data);
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function add(ItemRequest $request)
    {

        // $posts - $request->all();
        // Item::create($posts);
        // Item::create($request->id);
        Item::create($request->all());

        //DB追加処理
        return redirect()->route('admin.item.index');
    }

    public function edit(Request $request)
    {
        //SELECT 

        //$_GET['id'] のようなもの
        $data = ['id' => $request->id];
        return view('admin.item.edit', $data);
    }

    public function update(Request $request)
    {
        $data = ['id' => $request->id];
        return redirect()->route('admin.item.edit', $data);
    }
}
