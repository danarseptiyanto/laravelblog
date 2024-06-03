<form class="" action="{{ route('auth.login') }}" method="POST">
    @csrf
    @error('username')
        <p>{{ $message }}</p>
    @enderror
    <div>
        <label for="email" class="">Username</label>
        <input type="email" name="email" id="email" class="" placeholder="Email" required="">
    </div>
    @error('password')
        <p>{{ $message }}</p>
    @enderror
    <div>
        <label for="password" class="">Password</label>
        <input type="password" name="password" id="password" placeholder="••••••••" class="" required="">
    </div>
    <hr class="border-0">
    <button type="submit" class="">Sign in</button>
    <p class="">
        Belum punya akun? <a href="{{ route('auth.register') }}" class="">Daftar</a>
    </p>
</form>
@if (session('status'))
    {{ session('status') }}
@endif