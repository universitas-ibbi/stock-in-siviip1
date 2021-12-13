@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List Barang Masuk</h1>
    <hr>
    <div class="d-flex flex-row-reverse mb-2">
        <a href="{{ route("barangmasuk.create") }}" class="btn btn-success">Tambah</a>
    </div>
    <table class="table table-bordered bg-white">
        <thead>
            <th width="10%">No.</th>
            <th>Tanggal</th>
            <th>Nama Produk</th>
            <th>Qty</th>
            <th>Satuan</th>
            <th colspan=2 class="w-25">Action</th>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection
