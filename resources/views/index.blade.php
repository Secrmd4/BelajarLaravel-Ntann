@extends('mainapps')
@section('title')Home @endsection
@section('content')
    <section id="header" class="header">
        <div class="container">
            <h1 class="judul-header"><p class="text-secondary-emphasis fw-bold">Selamat Datang Di <br> Blog Intan</h1>
        </div>
    </section>

    <section class="py-5" id="blog">
      <div class="container">
          <a href="/create" class="btn btn-secondary fw-bold">Tambahkan Blog Anda</a>
          @foreach($posts as $posts)
        <div class="card mb-3 mt-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset ('storage/' . $posts->gambar_post) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="d-flex justify-content-end" role="group">
                  <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-three-dots"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/editstts/{{ $posts->id }}">Edit</a></li>
                    <li><a class="dropdown-item" href="/delete/{{ $posts->id }}">Delete</a></li>
                  </ul>
                </div>
                <h4 class="card-title fw-bold">{{ $posts->judul_post}}</h4>
                <p class="card-text">{{ $posts->isi_post}}</p>
                <p class="card-text">
                <small class="text-body-secondary">{{ $posts->penulis_post }}</small> <a href="" class="btn"><i class="bi bi-heart"></i> like</a> <a href="" class="btn"><i class="bi bi-chat-text"></i>Comment</a></p>
              </div>
            </div>
          </div>
        </div>
          @endforeach
      </div>
    </section>
   
@endsection