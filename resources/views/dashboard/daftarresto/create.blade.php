@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Resto Baru</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/daftarresto" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="resto" class="form-label">Nama Resto</label>
                <input type="text" class="form-control @error('resto') is-invalid @enderror" id="resto" name="resto" required autofocus value="{{ old('resto') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            </div>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if(old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>                            
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto Resto</label>
                <img class="img-preview img-fluid mb-3 col-sm-8">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="buka" class="form-label">Jam Buka</label>
                <input type="text" class="form-control @error('buka') is-invalid @enderror" id="buka" name="buka" required autofocus value="{{ old('buka') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sajian" class="form-label">Sajian</label>
                <input type="text" class="form-control @error('sajian') is-invalid @enderror" id="sajian" name="sajian" required autofocus value="{{ old('sajian') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Jangkauan Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required autofocus value="{{ old('harga') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <a class="text-danger">{{ $message }}</a>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>
            
                <button type="submit" class="btn btn-tp mb-5">Tambah Resto</button>
        </form>
    </div>

    <script>
        const resto = document.querySelector('#resto');
        const slug = document.querySelector('#slug');

        resto.addEventListener('change', function()
        {
            fetch('/dashboard/daftarresto/checkSlug?resto=' * resto.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault()
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        
    </script>

@endsection