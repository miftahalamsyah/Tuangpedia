{{-- login --}}
@extends('layout.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin">
            <img class="mb-6 rounded mx-auto d-block" src="/img/tuangpedialogo.png" alt="tuangpedialogo" width="206" height="126">
            <h1 class="h3 mb-3 fw-normal text-center">Masuk</h1>
            <form action="/masuk" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Alamat Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Kata Sandi</label>
                </div>
                <button class="w-100 btn btn-lg btn-tp" type="submit">Masuk</button>
            </form>
            <br>
            <small><p class="text-center mb-0 pt-2 border-top">Belum Punya Akun?</p></small>
            <button class="w-100 btn btn-lg btn-tp-orange border-top mt-2" type="submit"><a href="/registrasi" class="text-decoration-none text-white">Registrasi</a></button>
        </main>
    </div>
</div>

@endsection
