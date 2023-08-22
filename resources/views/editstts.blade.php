@extends('mainapps')
@section('title')edit @endsection
@section('content')
    <div class="container py-3">
        <h3 class="fw-bold"> Tambahkan Blog</h3>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/updateblog/{{$posts->id }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="penulis" class="form-label">penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis_post"
                        value="{{ $posts->penulis_post}}">
                            
                    </div>  
                    <div class="mb3">
                        <label for="judul-post" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="judul-post" name="judul_post"
                        value="{{ $posts->penulis_post}}">
                    </div>    
                    <div class="mb-3">
                        <label for="isi-post" class="form-label">Isi Post</label>
                        <textarea class="form-control" name="isi_post" id="isi-post" cols="30" rows="5" name="isi_post"  
                        value="{{ $posts->isi_post}}">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_post" class="form-label">Gambar post</label>
                        <Input type="file" class="form-control" id="gambar_post" name="gambar_post"
                        accept="image/*">
                        <Input type="hidden" name="oldimage" value="{{ $posts->gambar_post}}" >
                        <img src="{{ asset ('storage/' . $posts->gambar_post) }}" class="img-thumbnail mt-3" width="40%" alt="Foto">
                    </div>
                    <div class="text-end">
                        <a href="/home" class="btn btn-secondary">kembali</a>
                        <button type="submit" class="btn btn=secondary">update</button>
                    </div>
                    </div>
                </form>
            </div>  
        </div> 
    </div> 
@endsection
