<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="space-y-3 md:space-y-3" action="{{ route('auth.register') }}" method="POST">
        @csrf
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="name" class="">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="" placeholder="Nama Lengkap" required="">
        </div>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="email" class="">Email</label>
            <input type="text" name="email" id="email" class="" placeholder="Username" required="">
        </div>
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="password" class="">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="" required="">
        </div>
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="password" class="">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password" placeholder="••••••••" class="" required="">
        </div>
        <hr class="border-0">
        <button type="submit" class="">Daftar</button>
        </p>
    </form>
</body>
</html>