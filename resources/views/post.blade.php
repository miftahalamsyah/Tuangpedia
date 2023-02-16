@extends('layout.main')

@section('container')

    <div class="container">
        <div class="resto" id="resto" style="">
            <div class="row justify-content-center mb-2">
                <div class="col-md-10">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="max-height: 400px; overflow:hidden;">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100 img-fluid rounded-3" alt="{{ $post->category->name }}">
                                @else
                                    <img src="https://source.unsplash.com/1200x400/?food/?{{ $post->category->name }}" class="d-block w-100 img-fluid rounded-3" alt="{{ $post->category->name }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <h1 class="mb-2 mt-2">{{ $post->resto }}</h1>
                    
                    <small class="text-muted">
                          <p>Kategori : <a href ="/daftarresto?category={{ $post->category->slug }}" class="text-tp-orange text-decoration-none">{{ $post->category->name }}</a></p>
                    </small>

                    <div id="resto_info" class="row justify-content-center">
                        <ul class="col-sm-5">
                            <li>
                                <span class="fw-bold">Jam Buka</span>
                                <p>{{ $post->buka }}</p>
                            </li>
                            <li>
                                <span class="fw-bold">Sajian</span>
                                <p>{{ $post->sajian }}</p>
                            </li>
                        </ul>
                        <ul class="col-sm-5">
                            <li>
                                <span class="fw-bold">Alamat</span>
                                <p>{{$post->alamat}}</p>
                            </li>
                            <li>
                                <span class="fw-bold">Jangkauan Harga</span>
                                <p>{{ $post->harga }}</p>
                            </li>
                        </ul>
                    </div>

                    <article class="my-3 fs-7">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <section class="daftarmenu border-top" id="daftarmenu">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-5 mt-5">
                    <h4 class="text-center">Daftar Menu</h4>
                </div>
            </div>        
        </div>
    </section> --}}

    <section class="komentar border-top" id="komentar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-5 mt-4">    
                    <h4>Komentar</h4>
                    <div class="mt-3">
                        @comments(['model' => $post])
                    </div>
                </div>
            </div>        
        </div>
    </section>

    
@endsection

