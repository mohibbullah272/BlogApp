<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $blogs = blogs::query()
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        return view('dashboard', [
            'user' => $user,
            'blogs' => $blogs,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'slug' => ['required', 'string', 'max:255', 'unique:blogs,slug'],
            'status' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'tags' => ['required', 'string', 'max:255'],
        ]);

        $validated['image'] = $request->file('image')->store('blogs', 'public');
        $validated['author'] = $request->user()->name;
        $validated['user_id'] = $request->user()->id;

        blogs::query()->create($validated);

        return redirect()->route('dashboard')->with('success', 'Blog created successfully.');
    }

    public function show(Request $request, blogs $blog)
    {
        abort_unless($blog->user_id === $request->user()->id, 403);

        return view('dashboard', [
            'user' => $request->user(),
            'blogs' => blogs::query()->where('user_id', $request->user()->id)->latest()->get(),
            'selectedBlog' => $blog,
        ]);
    }

    public function update(Request $request, blogs $blog)
    {
        abort_unless($blog->user_id === $request->user()->id, 403);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('blogs', 'slug')->ignore($blog->id)],
            'status' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'tags' => ['required', 'string', 'max:255'],
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }

            $validated['image'] = $request->file('image')->store('blogs', 'public');
        } else {
            unset($validated['image']);
        }

        $validated['author'] = $request->user()->name;
        $blog->update($validated);

        return redirect()->route('dashboard')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Request $request, blogs $blog)
    {
        abort_unless($blog->user_id === $request->user()->id, 403);

        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        blogs::query()->whereKey($blog->id)->delete();

        return redirect()->route('dashboard')->with('success', 'Blog deleted successfully.');
    }
}
