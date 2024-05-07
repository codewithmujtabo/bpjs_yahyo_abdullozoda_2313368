@extends('layouts.master')


@section('content')


<h1>Tambah Pasien Baru</h1>
<p class="lead">Tambahkan pasien baru ke dalam database.</p>
<hr>

@if(Session::has('flash_message'))
  <div class="alert alert-success">
    {{ Session::get('flash_message') }}
  </div>
@endif


@if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>
@endif

{!! Form::open([
    'route' => 'pasien.store'
]) !!}
<div class="form-group">
    {!! Form::label('nama', 'Nama Lengkap:', ['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:', ['class' => 'control-label']) !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tgl_lahir', 'Tanggal Lahir:', ['class' => 'control-label']) !!}
    {!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nik', 'NIK:', ['class' => 'control-label']) !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Tambah Pasien Baru', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}


@endsection
