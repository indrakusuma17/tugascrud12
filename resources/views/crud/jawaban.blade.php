@extends('adminlte.master')

@section('content')
<div class="ml-4 mt-2">
<a href="{{ url('/pertanyaan')}}">
        <button type="submit" class="btn btn-success">Kembali Ke Pertanyaan</button>
        </a><br>
</div>
<div class="card ml-4 mt-2">

    @foreach ($jawabans as $jawaban)
        <h2>  {{ $jawaban->jawaban}} </h2><br>    
    @endforeach
</div>

@endsection