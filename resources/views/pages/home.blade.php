@extends('layouts.master')


@section('content')

<div class="container px-10 items-center justify-center mx-auto">
    <h1 class="text-center mt-20 text-3xl">Selamat Datang!!!</h1>
    <p class="lead text-center mt-2">Aplikasi ini akan melakukan CRUD untuk register data pasien BPJS menggunakan Laravel.</p>
    <hr class="px-10 my-3">
    <div class="container ml-[500px]">
        <a href="{{ url('pasien') }}" class="btn btn-info">Lihat Semua Pasien</a>
        <a href="{{ url('pasien/create') }}" class="btn btn-primary">Tambahkan Pasien Baru</a>
    </div>
</div>


@endsection