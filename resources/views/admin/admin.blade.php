<x-layout>
<x-admin.sidebar />
  <div class="sm:m-10 sm:ml-80">
    <div class="max-w-screen-xl mx-auto">
        <div class="mb-8">
            <h1 class="text-xl font-bold text-gray-900 md:text-3xl">Dashboard</h1>
            <p class="text-gray-500">27 Mei 2024</p>
        </div>
        <div class="flex gap-5 mb-5">
          <div class="overflow-hidden w-full bg-white rounded border-slate-200 border text-slate-500 shadow-slate-200">
            <div class="bg-blue-500 h-60 flex justify-center items-center">
              <i class="text-white text-6xl ri-news-line"></i>
            </div>
            <div class="p-6">
              <header>
                <h3 class="text-xl font-medium text-slate-700">Memories of the past</h3>
                <p class="text-sm text-slate-400"> By George, jun 3 2023</p>
              </header>
            </div>
          </div>
          <div class="overflow-hidden w-full bg-white rounded border-slate-200 border text-slate-500 shadow-slate-200">
            <div class="bg-blue-500 h-60 flex justify-center items-center">
              <i class="text-white text-6xl ri-bar-chart-box-line"></i>
            </div>
            <div class="p-6">
              <header>
                <h3 class="text-xl font-medium text-slate-700">Memories of the past</h3>
                <p class="text-sm text-slate-400"> By George, jun 3 2023</p>
              </header>
            </div>
          </div>
          <div class="overflow-hidden w-full bg-white rounded border-slate-200 border text-slate-500 shadow-slate-200">
            <div class="bg-blue-500 h-60 flex justify-center items-center">
              <i class="text-white text-6xl ri-table-line"></i>
            </div>
            <div class="p-6">
              <header>
                <h3 class="text-xl font-medium text-slate-700">Memories of the past</h3>
                <p class="text-sm text-slate-400"> By George, jun 3 2023</p>
              </header>
            </div>
          </div>
        </div>
        <div>
          <div class="flex justify-between">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Blog Post</h3>
            <a href="{{ route('post.newpost') }}">
              <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300 disabled:shadow-none">
                  <span><i class="ri-add-line"></i> Tambah</span>
              </button>
            </a>
            </div>
            <div class="w-full overflow-x-auto">
                <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
                <tbody>
                    <tr>
                        <th scope="col" style="width: 7px" class="h-12 px-6 text-center text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100">No</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100">Judul</th>
                        <th scope="col" class="w-48 text-center h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100">Upload</th>
                        <th scope="col" class="w-48 h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100 text-center">Aksi</th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr class="transition-colors duration-300 hover:bg-slate-50">
                        <td class="text-center h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">{{ $loop->iteration }}</td>
                        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">{{ $post->title }}</td>
                        <td class="w-48 text-center h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">{{ $post->created_at->format('j M Y') }}</td>
                        <td class="w-48 text-center h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                            <a href="{{ route('post.editpost', $post) }}">
                            <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300 disabled:shadow-none">
                                <span><i class="ri-edit-box-line"></i></span>
                            </button>
                            </a>
                            <a href="/blog/{{ $post->slug }}">
                            <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300 disabled:shadow-none">
                                <span><i class="ri-eye-line"></i></span>
                            </button>
                            </a>
                            <a href="{{ route('post.deletepost', $post) }}">
                            <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide transition duration-300 border rounded focus-visible:outline-none whitespace-nowrap border-blue-500 text-blue-500 hover:border-blue-600 hover:text-blue-600 focus:border-blue-700 focus:text-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:text-blue-300 disabled:shadow-none">
                                <span><i class="ri-delete-bin-7-line"></i></span>
                            </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
          <div class="flex justify-between">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Projects</h3>
            <a href="">
              <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300 disabled:shadow-none">
                  <span><i class="ri-add-line"></i> Tambah</span>
              </button>
            </a>
            </div>
            <div class="w-full overflow-x-auto">
                <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
                <tbody>
                    <tr>
                        <th scope="col" style="width: 7px" class="h-12 px-6 text-center text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100">No</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100">Judul</th>
                        <th scope="col" class="w-48 text-center h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100">Upload</th>
                        <th scope="col" class="w-48 h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100 text-center">Aksi</th>
                    </tr>
                    @foreach ($projects as $project)
                    <tr class="transition-colors duration-300 hover:bg-slate-50">
                        <td class="text-center h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">{{ $loop->iteration }}</td>
                        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">{{ $project->title }}</td>
                        <td class="w-48 text-center h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">{{ $project->created_at->format('j M Y') }}</td>
                        <td class="w-48 text-center h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                            <a href="">
                            <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300 disabled:shadow-none">
                                <span><i class="ri-edit-box-line"></i></span>
                            </button>
                            </a>
                            <a href="/project/{{ $project->slug }}">
                            <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300 disabled:shadow-none">
                                <span><i class="ri-eye-line"></i></span>
                            </button>
                            </a>
                            <a href="{{ route('project.deleteproject', $project) }}">
                            <button class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide transition duration-300 border rounded focus-visible:outline-none whitespace-nowrap border-blue-500 text-blue-500 hover:border-blue-600 hover:text-blue-600 focus:border-blue-700 focus:text-blue-700 disabled:cursor-not-allowed disabled:border-blue-300 disabled:text-blue-300 disabled:shadow-none">
                                <span><i class="ri-delete-bin-7-line"></i></span>
                            </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</x-layout>



{{-- <h1>Post</h1>
@foreach ($posts as $post)
    <ul>
        <li><img src="{{ $post->thumbnail }}" height="50px"></li>
        <li><b>{{ $post->title }}</b></li>
        <li>{{ $post->user->name }}</li>
        <li>{{ $post->created_at->format('j M Y, g:i a') }}</li>
        <li>{{ $post->slug }}</li>
        <li>{{ $post->body }}</li>
        <li><a href="{{ route('post.editpost', $post) }}">Edit</a></li>
        <li><a href="{{ route('post.deletepost', $post) }}">Delete</a></li>
    </ul>
@endforeach

<h1>Project</h1>
@foreach ($projects as $project)
    <ul>
        <li><img src="{{ $project->thumbnail1 }}" height="50px"></li>
        <li><img src="{{ $project->thumbnail2 }}" height="50px"></li>
        <li><img src="{{ $project->thumbnail3 }}" height="50px"></li>
        <li><b>{{ $project->title }}</b></li>
        <li>{{ $project->created_at->format('j M Y, g:i a') }}</li>
        <li>{{ $project->slug }}</li>
        <li>{{ $project->body }}</li>
        <li><a href="{{ route('project.editproject', $post) }}">Edit</a></li>
        <li><a href="{{ route('project.deleteproject', $project) }}">Delete</a></li>
    </ul>
@endforeach --}}