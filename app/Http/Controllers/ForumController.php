<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum; // Tambahkan ini

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::with('user')->latest()->get();
        return view('forums.index', compact('forums'));
    }

    public function create()
    {
        return view('forums.create');
    }

    public function store(Request $request)
    {
        $request->validate
        ([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Forum::create
        ([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('forums.index');
    }

    public function show(Forum $forum)
    {
        return view('forums.show', compact('forum'));
    }

    public function edit(Forum $forum)
    {
        return view('forums.edit', compact('forum'));
    }

    public function update(Request $request, Forum $forum)
    {
        $request->validate
        ([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $forum->update($request->only('title', 'content'));
        return redirect()->route('forums.index')->with('success', 'Forum updated successfully!');
    }

    public function destroy(Forum $forum)
    {
        $forum->delete();
        return redirect()->route('forums.index');
    }

}
