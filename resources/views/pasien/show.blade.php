@extends('layouts.master')


@section('content')


<h1>{{ $pasien->nama }}</h1>
<p class="lead">NIK: {{ $pasien->nik }}</p>
<p class="lead">Alamat: {{ $pasien->alamat }}</p>
<p class="lead">Tanggal Lahir: {{ $pasien->tgl_lahir }}</p>
<hr>


<a href="{{ route('pasien.index') }}" class="btn btn-info">Kembali ke list pasien</a>
<a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-primary">Edit Pasien</a>
<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['pasien.destroy', $pasien->id]
        ]) !!}
    {!! Form::submit('Hapus pasien ini', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>


@endsection
