@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Barang Masuk</h1>
    <hr>
    <form action="{{ isset($barangmasuk)
                        ?route('barangmasuk.update',$barangmasuk)
                        :route('barangmasuk.store') }}" method="post">
        @csrf
        @isset($barangmasuk)
            @method("PUT")
        @endisset
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date"
                class="form-control @error('tanggal') is-invalid @enderror"
                name="tanggal"
                value="{{ isset($barangmasuk)?$barangmasuk->tanggal:old("tanggal") }}">
            @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="produk_id" class="form-label">Produk</label>
            <select name="produk_id" id="kelompok_id" class="form-control @error('produk_id') is-invalid @enderror">
            @foreach ($produk as $item)
                <option value="{{ $item->id }}"
                    {{ (isset($barangmasuk)&&$barangmasuk->produk_id==$item->id)?"selected":"" }}>
                    {{ $item->nama}}
                </option>
            @endforeach
            </select>
            @error('produk_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Qty</label>
            <input type="number" class="form-control @error('qty') is-invalid @enderror"
                name="qty"
                value="{{ isset($barangmasuk)?$barangmasuk->qty:old("qty") }}">
            @error('qty')
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
