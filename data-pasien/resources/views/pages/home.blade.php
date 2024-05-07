@extends('layouts.master')


@section('content')


<h1>Selamat Datang</h1>
<p class="lead">Aplikasi ini akan melakukan CRUD untuk register data pasien BPJS menggunakan Laravel.</p>
<hr>


<a href="{{ url('pasien') }}" class="btn btn-info">Lihat Semua Pasien</a>
<a href="{{ url('pasien/create') }}" class="btn btn-primary">Tambahkan Pasien Baru</a>


@endsection