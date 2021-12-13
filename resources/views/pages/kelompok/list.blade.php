@extends('layouts.app')

@section('content')
<div class="container">
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

        </tbody>
    </table>
</div>
@endsection
