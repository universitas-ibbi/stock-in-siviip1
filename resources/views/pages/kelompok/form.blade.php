@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Kelompok</h1>
    <hr>
    <form action="{{ isset($kelompok)
                        ?route("kelompok.update",$kelompok)
                        :route("kelompok.store") }}" method="post">
        @csrf
        @isset($kelompok)
            @method("PUT")        
        @endisset
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control 
                @error('nama') is-invalid @enderror" name="nama"
                value="{{ isset($kelompok)?$kelompok->nama:old('nama') }}">
            @error('nama')
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
