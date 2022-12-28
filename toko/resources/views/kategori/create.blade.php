@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Buat Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection