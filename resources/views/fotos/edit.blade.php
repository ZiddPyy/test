@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Update Foto</h2>
    <form method="POST" action="{{ route('foto.update', $foto->foto_id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul_foto">Judul Foto</label>
            <input type="text" class="form-control" id="judul_foto" name="judul_foto" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_foto">Deskripsi</label>
            <textarea class="form-control" id="deskripsi_foto" name="deskripsi_foto"></textarea>
        </div>
        <div class="form-group">
            <label for="lokasi_file">File Foto</label>
            <input type="file" class="form-control-file" id="lokasi_file" name="lokasi_file" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
