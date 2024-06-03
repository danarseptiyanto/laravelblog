<h1>Create project</h1>
<form method="POST" action="{{ route('project.newproject') }}">
    @csrf
    <input type="text" name="title" placeholder="title" {{ old('title') }}>
    <input type="text" name="slug" placeholder="slug" {{ old('slug') }}>
    <input type="text" name="thumbnail1" placeholder="thumbnail" {{ old('thumbnail1') }}>
    <input type="text" name="thumbnail2" placeholder="thumbnail" {{ old('thumbnail2') }}>
    <input type="text" name="thumbnail3" placeholder="thumbnail" {{ old('thumbnail3') }}>
    <textarea name="body" placeholder="body" cols="40" rows="40"></textarea>
    <button type="submit">Buat Post</button>
</form>