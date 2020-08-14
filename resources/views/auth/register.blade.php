<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap-4.5.0/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container" style="background-image: url('img/bg1.jpg')">
        <div class="login-wrapper">
            <h1 class="title">Silahkan Register</h1>
            <hr>
            <form action="{{ route('register') }}" method="POST" class="login-form">
            @csrf
                <input type="text" class="input" placeholder="Masukan nama" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror

                <input type="email" class="input" placeholder="Masukan email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror

                <input type="password" class="input" placeholder="Masukan password" name="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
                <input type="password" id="password-confirm" placeholder="Konfirmasi Password" name="password_confirmation" class="input" required>

                <textarea name="address" id="address" rows="3" placeholder="Masukan alamat"></textarea>@error('address')<span class="invalid-feedback" role="alert">{{ $message }}</span>@enderror
                

                <input type="text" class="input" placeholder="Masukan No Hp" name="phone" required>
                @error('phone')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror

                <button type="submit">Daftar</button>
                <p class="message">Anda Sudah punya akun  ? <a href="/login">Masuk</a></p>
            </form>
        </div>
    </div>
</body>
</html>