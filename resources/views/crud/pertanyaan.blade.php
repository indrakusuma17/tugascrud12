@extends('adminlte.master')

@section('content')
<div class="card ml-3 mr-3 mt-3" >
    <a href="{{ url('/pertanyaan/create')}}">
        <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
    </a>
</form>    
    <table class="table table-boedered mt-3">
        <thead>
            <th>No</th>
            <th>List Pertanyaan</th>
            <th>Edit Pertanyaan</th>
            <th>Detail Jawaban</th>
            <th>Form Jawaban</th>
            <th>Detail QnA</th>
        </thead>
        <tbody>
            @foreach ($pertanyaans as $pertanyaan)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$pertanyaan->pertanyaan}}</td>
                    <td>
                        <a href="{{ url('/pertanyaan/'.$pertanyaan->id.'/edit')}}">
                        <button type="submit" class="btn btn-warning">Edit Jawaban</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/jawaban/'.$pertanyaan->id)}}">
                        <button type="submit" class="btn btn-success">Lihat Jawaban</button>
                    </a>
                    </td>
                    <td>
                        <form action="{{ url('/jawaban/'.$pertanyaan->id) }}" method="post">
                        @csrf
                                <input type="text" name="jawaban" id="jawaban">
                            <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan->id}}">
                            <input type="hidden" name="tanggal_dibuat" value="<?= date("Y-m-d"); ?>">
                            <input type="hidden" name="tanggal_diperbaharui" value="<?= date("Y-m-d"); ?>">
                            <button type="submit" class="btn btn-success">Submit Jawaban</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ url('/pertanyaan/'.$pertanyaan->id)}}">
                        <button type="submit" class="btn btn-primary">Lihat QnA</button>
                        <form action="{{ url('/pertanyaan/'.$pertanyaan->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class= "fas fa-trash"></i></button>
                        </form>
                    </a>
                    </td>
                    <td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
