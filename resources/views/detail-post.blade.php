@php
    $body = Str::markdown($post->body);
@endphp

<h1>{{ $post->title }}</h1>
<li>{{ $post->user->name }}</li>

<li>{{ $post->user->name }}</li>
<li>{{ $post->created_at->format('j M Y, g:i a') }}</li>
<li>{{ $post->slug }}</li>
<li>{!! $body !!}</li>

<li>{{ $slug }}</li>