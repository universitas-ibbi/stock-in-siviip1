@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Produk</h1>
    <hr>
    <form action="{{ isset($produk)
                    ?route("produk.update",$produk)
                    :route("produk.store") }}" method="post">
        @csrf
        @isset($produk)
            @method("PUT")
        @endisset
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text"
                class="form-control @error("nama") is-invalid @enderror"
                name="nama"
                value="{{ isset($produk)?$produk->nama:old("nama") }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kelompok_id" class="form-label">Kelompok</label>
            <select name="kelompok_id" id="kelompok_id"
            class="form-control @error('kelompok_id') is-invalid @enderror">
            @foreach ($kelompok as $item)
                <option value="{{ $item->id }}"
                    {{ (isset($produk) && $produk->kelompok_id == $item->id) || old("kelompok_id")==$item->id?"selected":"" }}>{{ $item->nama }}</option>
            @endforeach
            </select>
            @error('kelompok_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text"
                class="form-control @error('satuan') is-invalid @enderror"
                name="satuan"
                value="{{ isset($produk)?$produk->satuan:old("satuan") }}">
            @error('satuan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number"
                class="form-control @error('harga') is-invalid @enderror"
                name="harga"
                value="{{ isset($produk)?$produk->harga:old("harga") }}">
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
</div>
@endsection
