<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'date' => 'required|date',
        ]);

        $imagePath = $request->file('image')->store('news_images', 'public');

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'date' => $request->date,
        ]);

        return redirect()->route('news.index')->with('success', 'News created successfully!');
    }
    public function show($id)
    {
        $newsItem = News::findOrFail($id); // Menemukan berita berdasarkan ID
        return view('news.detail_news', compact('newsItem'));
    }
}
