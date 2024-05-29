@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Artikel') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/artikels/' . $artikel->image) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $artikel->judul }}</h4>
                    <h4>{!! $artikel->deskripsi !!}</h4>
                    <h4>{{ $artikel->tanggal}}</h4>
                    
                    <p class="tmt-3">
                        {!! $artikel->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection