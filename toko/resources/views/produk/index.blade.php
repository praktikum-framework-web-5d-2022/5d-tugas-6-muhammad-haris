@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card p-4">
                <a href="{{ route('produk.create') }}" class="btn btn-secondary p-3 mb-4">
                    <h5 class="mb-0">Buat Produk</h5>
                </a>

                @if ($message = Session::get('success'))
                <div class="alert alert-success mb-4">
                    <p class="mb-0">{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produks as $produk)
                        <tr>
                            <th scope="row" class="text-center">{{ ++$i }}</th>
                            <td>{{ $produk->kategoris->nama ?? 'None' }}</td>
                            <td>{{ $produk->nama }}</td>
                            <td>{{ $produk->harga }}</td>
                            <td class="text-center">
                                <form action="{{ route('produk.destroy',$produk->id) }}" method="POST">
                                    <a href="{{ route('produk.edit',$produk->id) }}" class="btn btn-success">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {!! $produks->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection