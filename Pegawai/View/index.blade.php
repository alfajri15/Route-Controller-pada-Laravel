@extends('adminlte::page')
@section('title','Data Pegawai')
@section('content_header')
    <h1>Data Pegawai</h1>
@stop
@section('content') 
{{-- Isi Konten Data Pegawai --}}
@php
$ar_judul = ['No','NIP','Nama','Alamat','Email'];
$no = 1;
@endphp
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
