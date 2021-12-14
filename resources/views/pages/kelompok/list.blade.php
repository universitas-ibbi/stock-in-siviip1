@extends('layouts.app')

@section('content')
<div class="container">
    @if(session("info"))
        <div class='alert alert-success'>
            {{ session("info") }}
        </div>
    @endif
    <h1>List Kelompok</h1>
    <hr>
    <div class="d-flex flex-row-reverse mb-2">
        <a href="{{ route("kelompok.create") }}" class="btn btn-success">Tambah</a>
    </div>
    <table class="table table-bordered bg-white">
        <thead>
            <th width="10%">No.</th>
            <th>Nama</th>
            <th colspan=2 class="w-25">Action</th>
        </thead>
        <tbody>
        @foreach($kelompok as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td><a href='{{ route('kelompok.edit',$item) }}' class="btn btn-warning">Rubah</a></td>
                <td>
                    <a href='' class="btn btn-danger"
                    onclick="event.preventDefault();
                    document.getElementById('form-hapus-{{$item->id}}').submit();">Hapus</a>
                    <form action="{{ route('kelompok.destroy',$item) }}" 
                        id='form-hapus-{{$item->id}}'
                        method="post">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
