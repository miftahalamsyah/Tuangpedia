@extends('layout.main')

@section('container')

<h1 class="mb-5 text-center mb-3">{{ $title }}</h1>

<div class="row justify-content-center mb-2">
    <div class="col-md-12">
        <form action="/daftarresto">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-5">
                <input type="text" class="form-control" placeholder="Cari Resto..." name="search" value="{{ request('search') }}">
                <button class="btn btn-tp" type="submit" >Cari</button>
            </div>
        </form>
    </div>
</div>

@if($posts->count())
    @foreach ($posts as $post)
        <div class="card mb-4 border border-3" style="">
            <div class="row g-0">
                <div class="col-md-4 border border-2"  style=" max-height:300px; overflow:hidden;">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100 img-fluid rounded-3" alt="{{ $post->category->name }}" style:"max-height:300px;">
                    @else
                        <img src="https://source.unsplash.com/400x300/?food/?{{ $post->category->name }}" class="d-block w-100 img-fluid rounded-3" alt="{{ $post->category->name }}">
                    @endif
                </div>
            <div class="col-md-8">
                <div class="card-body px-5">
                    <h3 class="card-title"><a href="/daftarresto/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->resto }}</a></h3>
                    <small class="text-muted">
                        <p>Kategori : <a href ="/daftarresto?category={{ $post->category->slug }}" class="text-tp-orange text-decoration-none">{{ $post->category->name }}</a></p>
                    </small>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/daftarresto/{{ $post->slug }}" class="text-decoration-none btn btn-tp">Selengkapnya</a>
                </div>
            </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center fs-3">Tidak Ada Daftar Resto</p>
@endif
<div class="d-flex justify-content-center">
    {{ $posts->links('vendor.pagination.custom') }}
</div>
    
@endsection