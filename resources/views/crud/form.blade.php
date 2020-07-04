@extends('adminlte.master')

@section('content')
<div class="card ml-4 mt-2">
    <form action="{{ url('/pertanyaan') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input class="form-control" type="text" name="judul" id="judul">
        </div>
        <div class="form-group">
            <label for="pertanyaan">Isi</label>
            <textarea class="form-control" type="text" name="pertanyaan" id="pertanyaan" cols="30" rows="10"></textarea>
        </div>
        <input type="hidden" name="tanggal_dibuat" value="<?= date("Y-m-d"); ?>">
        <input type="hidden" name="tanggal_diperbaharui" value="<?= date("Y-m-d"); ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection