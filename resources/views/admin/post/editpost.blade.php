<x-layout>
    <x-admin.sidebar />
    <div class="sm:m-10 sm:ml-80">
        <div class="max-w-screen-xl mx-auto">
            <div class="mb-8">
                <h1 class="text-xl font-bold text-gray-900 md:text-3xl">Edit Post</h1>
                <p class="text-gray-500">27 Mei 2024</p>
            </div>
            <form method="POST" action="{{ route('post.updatepost', $post) }}">
                @csrf
                @method('patch')
                <div class="relative my-6">
                    <input value="{{ $post->title }}" itype="text" name="title" placeholder="Title" {{ old('title') }} class="relative w-full h-10 px-4 text-sm placeholder-transparent transition-all border rounded outline-none focus-visible:outline-none peer border-slate-200 text-slate-500 autofill:bg-white invalid:border-pink-500 invalid:text-pink-500 focus:border-blue-500 focus:outline-none invalid:focus:border-pink-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400" />
                    <label class="cursor-text peer-focus:cursor-default peer-autofill:-top-2 absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 transition-all before:absolute before:top-0 before:left-0 before:z-[-1] before:block before:h-full before:w-full before:bg-white before:transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-required:after:text-pink-500 peer-required:after:content-['\00a0*'] peer-invalid:text-pink-500 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-500 peer-invalid:peer-focus:text-pink-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400 peer-disabled:before:bg-transparent">
                    Title
                    </label>
                </div>
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
                <div class="relative my-6">
                    <input value="{{ $post->slug }}" type="text" name="slug" placeholder="slug" {{ old('slug') }} class="relative w-full h-10 px-4 text-sm placeholder-transparent transition-all border rounded outline-none focus-visible:outline-none peer border-slate-200 text-slate-500 autofill:bg-white invalid:border-pink-500 invalid:text-pink-500 focus:border-blue-500 focus:outline-none invalid:focus:border-pink-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400" />
                    <label class="cursor-text peer-focus:cursor-default peer-autofill:-top-2 absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 transition-all before:absolute before:top-0 before:left-0 before:z-[-1] before:block before:h-full before:w-full before:bg-white before:transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-required:after:text-pink-500 peer-required:after:content-['\00a0*'] peer-invalid:text-pink-500 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-500 peer-invalid:peer-focus:text-pink-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400 peer-disabled:before:bg-transparent">
                    Slug
                    </label>
                </div>
                @error('slug')
                    <div>{{ $message }}</div>
                @enderror
                <div class="relative my-6">
                    <input value="{{ $post->thumbnail }}" type="text" name="thumbnail" placeholder="thumbnail" {{ old('thumbnail') }} class="relative w-full h-10 px-4 text-sm placeholder-transparent transition-all border rounded outline-none focus-visible:outline-none peer border-slate-200 text-slate-500 autofill:bg-white invalid:border-pink-500 invalid:text-pink-500 focus:border-blue-500 focus:outline-none invalid:focus:border-pink-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400" />
                    <label class="cursor-text peer-focus:cursor-default peer-autofill:-top-2 absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 transition-all before:absolute before:top-0 before:left-0 before:z-[-1] before:block before:h-full before:w-full before:bg-white before:transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-required:after:text-pink-500 peer-required:after:content-['\00a0*'] peer-invalid:text-pink-500 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-500 peer-invalid:peer-focus:text-pink-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400 peer-disabled:before:bg-transparent">
                    URL Thumbnail
                    </label>
                </div>
                @error('slug')
                    <div>{{ $message }}</div>
                @enderror
                <div class="relative my-6">
                    <textarea value="{{ $post->body }}" type="text" name="body" placeholder="body" rows="15" class="relative w-full px-4 py-2 text-sm placeholder-transparent transition-all border rounded outline-none focus-visible:outline-none peer border-slate-200 text-slate-500 autofill:bg-white invalid:border-pink-500 invalid:text-pink-500 focus:border-blue-500 focus:outline-none invalid:focus:border-pink-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400">{{ $post->body }}</textarea>
                    <label class="cursor-text peer-focus:cursor-default absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 transition-all before:absolute before:top-0 before:left-0 before:z-[-1] before:block before:h-full before:w-full before:bg-white before:transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-required:after:text-pink-500 peer-required:after:content-['\00a0*'] peer-invalid:text-pink-500 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-blue-500 peer-invalid:peer-focus:text-pink-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400 peer-disabled:before:bg-transparent">
                    Markdown Blog Post
                    </label>
                </div>
                @error('slug')
                    <div>{{ $message }}</div>
                @enderror
                <button type="submit" class="inline-flex items-center justify-center h-10 gap-2 px-5 text-sm font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300 disabled:shadow-none">
                    <span>Make Post</span>
                </button>
                <a href="/admin">
                    <button type="button" class="inline-flex items-center justify-center h-10 gap-2 px-5 text-sm font-medium tracking-wide transition duration-300 border rounded focus-visible:outline-none whitespace-nowrap border-blue-500 text-blue-500 hover:border-blue-600 hover:text-blue-600 focus:border-blue-700 focus:text-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:text-blue-300 disabled:shadow-none">
                        <span>Cancel</span>
                    </button>
                 </a>
            </form>
        </div>
    </div>
</x-layout>

{{-- <form method="POST" action="{{ route('post.updatepost', $post) }}">
    @csrf
    @method('patch')
    <input value="{{ $post->title }}" type="text" name="title" placeholder="title" {{ old('title') }}>
    <input value="{{ $post->slug }}" type="text" name="slug" placeholder="slug" {{ old('slug') }}>
    <input value="{{ $post->thumbnail }}" type="text" name="thumbnail" placeholder="thumbnail" {{ old('thumbnail') }}>
    <input value="{{ $post->body }}" type="text" name="body" placeholder="body" {{ old('body') }}>
    <button type="submit">Edit Post</button>
</form> --}}

