@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pengumuman</div>
                <div class="card-body">
                    <a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listPengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->kategori_artikel_id !!}</td>
                        <td>
                         <a href="{!! route('pengumuman.show',[$item->id]) !!}"class="btn btn-success">Lihat</a>

                        <a href="{!! route('pengumuman.edit',[$item->id]) !!}" class="btn btn-sm btn-primary">
                        Ubah</a>

                        {!! Form::open( ['route' => ['pengumuman.destroy', $item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini ?')"]); !!}

                        {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

