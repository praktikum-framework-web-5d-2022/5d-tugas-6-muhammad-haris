@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <a href="{{ route('kategori.create') }}" class="btn btn-secondary p-3 mb-4">
                    <h5 class="mb-0">Buat Kategori</h5>
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
                            <th scope="col">Nama Kategori</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategoris as $kategori)
                        <tr>
                            <th scope="row" class="text-center">{{ ++$i }}</th>
                            <td>{{ $kategori->nama }}</td>
                            <td class="text-center">
                                <form action="{{ route('kategori.destroy',$kategori->id) }}" method="POST">
                                    <a href="{{ route('kategori.show',$kategori->id) }}"
                                        class="btn btn-primary">Show</a>
                                    <a href="{{ route('kategori.edit',$kategori->id) }}"
                                        class="btn btn-success">Edit</a>
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
                    {!! $kategoris->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection