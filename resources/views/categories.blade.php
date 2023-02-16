@extends('layout.main')

@section('container')
    <center><h1 class="mb-5">Kategori Resto</h1></center>
    
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4" style="min-height: 400px;">
                <a href="/daftarresto?category={{ $category->slug }}">
                    <div class="card bg-dark text-white border border-3">
                        <img src="https://source.unsplash.com/400x300/?food/?{{ $category->name }}" class="img-fluid rounded-start" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 font-size-3" style="background-color: rgba(0,0,0,0.7) ">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>  
    
@endsection