@extends('adminlte.master')

@section('content')
<div class="card mt-3 mr-3 ml-3">
    <h1>Pertanyaan</h1><br>
    <p> judul : {{ $pertanyaan->judul}}</p><br>
    <p> Isi : {{ $pertanyaan->pertanyaan}}</p><br>
    <p> Tanggal Dibuat : {{ $pertanyaan->tanggal_dibuat}}</p><br>
    <p> Tanggal Diupdate : {{ $pertanyaan->tanggal_diperbaharui}}</p><br>

    <h2>Jawaban/s</h2>
    @foreach ($jawabans as $jawaban)
        <p> {{$jawaban->jawaban}}, {{$jawaban->tanggal_dibuat}}, {{$jawaban->tanggal_diperbaharui}}  </p>    
    @endforeach
</div>
@endsection