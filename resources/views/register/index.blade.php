{{-- register --}}
@extends('layout.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <img class="mb-6 rounded mx-auto d-block" src="/img/tuangpedialogo.png" alt="tuangpedialogo" width="206" height="126">
            <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
            <form action="/registrasi" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Nama</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Userame" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="floatingInput">Alamat Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Kata Sandi</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-tp-orange" type="submit">Registrasi</button>
                <small><p class="text-center mb-0 pt-2 border-top">Sudah Punya Akun?</p></small>
            <button class="w-100 btn btn-lg btn-tp border-top mt-2" type="submit"><a href="/masuk" class="text-decoration-none text-white">Masuk</a></button>
            </form>
        </main>
    </div>
</div>

@endsection
