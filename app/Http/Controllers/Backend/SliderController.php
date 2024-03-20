<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->paginate(10);
        return view('backend.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('backend.slider.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('slider'), $imageName);

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);
        return redirect()->route('slider.index')
            ->with('success', 'Slider created successfully.');
    }

    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->route('slider.index')
            ->with('success', 'Slider deleted successfully.');
    }
}
