@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Resto di TuangPedia</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-10 mb-5">
    <a href="/dashboard/daftarresto/create" class="btn btn-tp mb-3">Tambahkan Resto Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama Resto</th>
          <th scope="col">Kategori</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->resto }}</td>
                <td>{{ $post->category->name }}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>

@endsection