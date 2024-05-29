@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('jurusan') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('jurusan.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <hr>
                    <h4>{{ $jurusan->nama_jurusan }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection