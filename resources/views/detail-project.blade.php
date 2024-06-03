@php
    $body = Str::markdown($project->body);
@endphp

<h1>{{ $project->title }}</h1>
<li>{{ $project->created_at->format('j M Y, g:i a') }}</li>
<li>{{ $project->slug }}</li>
<li>{!! $body !!}</li>