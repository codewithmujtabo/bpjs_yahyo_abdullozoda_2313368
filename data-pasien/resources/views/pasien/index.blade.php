@extends('layouts.master')


@section('content')


<h1>Pasien BPJS</h1>
<p class="lead">List pasien BPJS. <a href="{{ route('pasien.create') }}">Tambah pasien baru?</a></p>
<hr>
    
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

@foreach($all_pasien as $pasien)
    <h3>Pasien {{ $pasien->id }}</h3>
    <p>Nama: {{ $pasien->nama}}</p>
    <p>NIK: {{ $pasien->nik}}</p>
    <p>
        <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-info">Lihat Pasien</a>
        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-primary">Edit Pasien</a>
    </p>
    <hr>
@endforeach

@endsection
