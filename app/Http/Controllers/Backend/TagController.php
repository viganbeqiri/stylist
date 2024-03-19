<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        $tags = \App\Models\Tag::orderBy('id', 'desc')->paginate(10);
        return view('backend.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('backend.tag.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'tag_name' => 'required',
        ]);

        \App\Models\Tag::create($data);
        return redirect()->route('tag.index')->with('success', 'Tag created successfully');
    }


    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->products()->detach();
        $tag->delete();
        return redirect()->back()->with('success', 'Tag deleted successfully');
    }
}
