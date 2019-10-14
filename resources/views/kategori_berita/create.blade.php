@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info" button class="btn btn-success">Tambah Kategori Berita</div>

                <div class="card-body">

                    {!! Form::open(['route' => 'kategori_berita.store', 'method' => 'post']) !!}
                        
                        @include('kategori_berita.form')
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
     </div>
@endsection
