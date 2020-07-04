@extends('adminlte.master')

@section('content')
<div class="card ml-4 mt-2">
    <form action="{{ url('/pertanyaan/'.$pertanyaan->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input hidden name ="id" value="$id">
        <label for="">Judul</label>
        <input class="form-control" type="text" name="judul" value="{{ $pertanyaan->judul }}"><br>
        <label for="">Isi</label>
        <input class="form-control" type="text" name="pertanyaan" value="{{ $pertanyaan->pertanyaan }}"><br>
        <label for="">Tanggal Dibuat</label>
        <input class="form-control" type="text" name="tanggal_dibuat" value="{{ $pertanyaan->tanggal_dibuat }}"><br>
        <label for="">Tanggal Diperbaharui</label>
        <input class="form-control" type="text" name="tanggal_diperbaharui" value="{{ $pertanyaan->tanggal_diperbaharui }}">
        <br>
        <button type="submit" class="btn btn-warning">Update pertanyaan</button>
    </form>
</div>

@endsection