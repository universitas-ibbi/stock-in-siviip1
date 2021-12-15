@extends('layouts.app')

@section('content')
<div class="container">
    @if (session("info"))
        <div class="alert alert-success">
            {{ session("info") }}
        </div>
    @endif
    <h1>List Produk</h1>
    <hr>
    <div class="d-flex flex-row-reverse mb-2">
        <a href="{{ route("produk.create") }}" class="btn btn-success">Tambah</a>
    </div>
    <table class="table table-bordered bg-white">
        <thead>
            <th width="10%">No.</th>
            <th>Nama</th>
            <th>Kelompok</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th colspan=2 class="w-25">Action</th>
        </thead>
        <tbody>
        @foreach ($produk as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kelompok->nama }}</td>
            <td>{{ $item->satuan }}</td>
            <td class="text-end">{{ number_format($item->harga) }}</td>
            <td>
                <a href="{{ route("produk.edit",$item) }}" class="btn btn-warning">Rubah</a>
            </td>
            <td>
                <a onclick="event.preventDefault;
                    document.getElementById('form-hapus-{{$item->id}}').submit();"
                    class="btn btn-danger">Hapus</a>
                <form id="form-hapus-{{ $item->id }}"
                    action="{{ route("produk.destroy",$item) }}" method="post">
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

