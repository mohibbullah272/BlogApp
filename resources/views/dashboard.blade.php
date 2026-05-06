<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-700 dark:text-red-400 leading-tight">
            {{ __('My Blog Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            @if (session('success'))
                <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                <div class="rounded-xl border border-red-200 bg-white p-6 shadow-sm dark:border-red-900 dark:bg-gray-800 lg:col-span-1">
                    <h3 class="text-lg font-semibold text-red-700 dark:text-red-400">User Information</h3>
                    <div class="mt-4 space-y-3 text-sm">
                        <p class="text-gray-700 dark:text-gray-300"><span class="font-semibold">Name:</span> {{ $user->name }}</p>
                        <p class="text-gray-700 dark:text-gray-300"><span class="font-semibold">Email:</span> {{ $user->email }}</p>
                        <p class="text-gray-700 dark:text-gray-300"><span class="font-semibold">Member since:</span> {{ $user->created_at?->format('M d, Y') }}</p>
                        <p class="text-gray-700 dark:text-gray-300"><span class="font-semibold">Your blogs:</span> {{ $blogs->count() }}</p>
                    </div>
                </div>

                <div class="rounded-xl border border-red-200 bg-white p-6 shadow-sm dark:border-red-900 dark:bg-gray-800 lg:col-span-2">
                    <h3 class="text-lg font-semibold text-red-700 dark:text-red-400">Create New Blog</h3>
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="mt-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                        @csrf
                        <div class="md:col-span-2">
                            <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-200">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-lg border border-red-200 px-3 py-2 focus:border-red-500 focus:ring-red-500 dark:border-red-900 dark:bg-gray-900" required>
                        </div>

                        <div class="md:col-span-2">
                            <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-200">Content</label>
                            <textarea name="content" rows="4" class="w-full rounded-lg border border-red-200 px-3 py-2 focus:border-red-500 focus:ring-red-500 dark:border-red-900 dark:bg-gray-900" required>{{ old('content') }}</textarea>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-200">Slug</label>
                            <input type="text" name="slug" value="{{ old('slug') }}" class="w-full rounded-lg border border-red-200 px-3 py-2 focus:border-red-500 focus:ring-red-500 dark:border-red-900 dark:bg-gray-900" required>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-200">Status</label>
                            <input type="text" name="status" value="{{ old('status', 'draft') }}" class="w-full rounded-lg border border-red-200 px-3 py-2 focus:border-red-500 focus:ring-red-500 dark:border-red-900 dark:bg-gray-900" required>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-200">Category</label>
                            <input type="text" name="category" value="{{ old('category') }}" class="w-full rounded-lg border border-red-200 px-3 py-2 focus:border-red-500 focus:ring-red-500 dark:border-red-900 dark:bg-gray-900" required>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-200">Tags</label>
                            <input type="text" name="tags" value="{{ old('tags') }}" class="w-full rounded-lg border border-red-200 px-3 py-2 focus:border-red-500 focus:ring-red-500 dark:border-red-900 dark:bg-gray-900" required>
                        </div>

                        <div class="md:col-span-2">
                            <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-200">Image</label>
                            <input type="file" name="image" accept="image/*" class="w-full rounded-lg border border-red-200 bg-white px-3 py-2 text-sm file:mr-4 file:rounded-md file:border-0 file:bg-red-600 file:px-4 file:py-2 file:text-white hover:file:bg-red-700 dark:border-red-900 dark:bg-gray-900" required>
                        </div>

                        <div class="md:col-span-2">
                            <button type="submit" class="rounded-lg bg-red-600 px-5 py-2 font-medium text-white transition hover:bg-red-700">
                                Publish Blog
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="rounded-xl border border-red-200 bg-white p-6 shadow-sm dark:border-red-900 dark:bg-gray-800">
                <h3 class="text-lg font-semibold text-red-700 dark:text-red-400">My Blogs</h3>

                @if ($blogs->isEmpty())
                    <p class="mt-3 text-sm text-gray-600 dark:text-gray-300">You have not created any blog yet.</p>
                @endif

                <div class="mt-5 grid grid-cols-1 gap-5 lg:grid-cols-2">
                    @foreach ($blogs as $blog)
                        <div class="overflow-hidden rounded-xl border border-red-200 dark:border-red-900">
                            @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="h-48 w-full object-cover">
                            @endif

                            <div class="space-y-3 p-5">
                                <div class="flex items-center justify-between gap-3">
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $blog->title }}</h4>
                                    <span class="rounded-full bg-red-100 px-2.5 py-1 text-xs font-medium text-red-700 dark:bg-red-950 dark:text-red-300">{{ $blog->status }}</span>
                                </div>

                                <p class="text-sm text-gray-700 dark:text-gray-300">{{ \Illuminate\Support\Str::limit($blog->content, 150) }}</p>

                                <div class="flex flex-wrap gap-2 text-xs text-gray-600 dark:text-gray-300">
                                    <span class="rounded bg-red-50 px-2 py-1 dark:bg-red-950">Category: {{ $blog->category }}</span>
                                    <span class="rounded bg-red-50 px-2 py-1 dark:bg-red-950">Tags: {{ $blog->tags }}</span>
                                    <span class="rounded bg-red-50 px-2 py-1 dark:bg-red-950">Slug: {{ $blog->slug }}</span>
                                </div>

                                @if (isset($selectedBlog) && $selectedBlog->id === $blog->id)
                                    <div class="rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700 dark:border-red-900 dark:bg-red-950 dark:text-red-300">
                                        {{ $blog->content }}
                                    </div>
                                @endif

                                <div class="flex flex-wrap items-center gap-3">
                                    <a href="{{ route('blogs.show', $blog) }}" class="rounded-lg border border-red-600 px-3 py-1.5 text-sm font-medium text-red-600 hover:bg-red-50 dark:hover:bg-red-950">
                                        Read
                                    </a>

                                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Delete this blog?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-lg bg-red-600 px-3 py-1.5 text-sm font-medium text-white hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </div>

                                <details class="rounded-lg border border-red-200 p-3 dark:border-red-900">
                                    <summary class="cursor-pointer text-sm font-semibold text-red-700 dark:text-red-400">Update blog</summary>
                                    <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data" class="mt-3 space-y-3">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="title" value="{{ $blog->title }}" class="w-full rounded-lg border border-red-200 px-3 py-2 dark:border-red-900 dark:bg-gray-900" required>
                                        <textarea name="content" rows="3" class="w-full rounded-lg border border-red-200 px-3 py-2 dark:border-red-900 dark:bg-gray-900" required>{{ $blog->content }}</textarea>
                                        <input type="text" name="slug" value="{{ $blog->slug }}" class="w-full rounded-lg border border-red-200 px-3 py-2 dark:border-red-900 dark:bg-gray-900" required>
                                        <input type="text" name="status" value="{{ $blog->status }}" class="w-full rounded-lg border border-red-200 px-3 py-2 dark:border-red-900 dark:bg-gray-900" required>
                                        <input type="text" name="category" value="{{ $blog->category }}" class="w-full rounded-lg border border-red-200 px-3 py-2 dark:border-red-900 dark:bg-gray-900" required>
                                        <input type="text" name="tags" value="{{ $blog->tags }}" class="w-full rounded-lg border border-red-200 px-3 py-2 dark:border-red-900 dark:bg-gray-900" required>
                                        <input type="file" name="image" accept="image/*" class="w-full text-sm">
                                        <button type="submit" class="rounded-lg bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">
                                            Save Changes
                                        </button>
                                    </form>
                                </details>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
