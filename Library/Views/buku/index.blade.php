@extends('adminlte::page')
@section('title','Data Buku')
@section('content_header')
    <h1>Daftar Buku</h1>
@stop
@section('content') 
{{-- Isi Konten Data Buku --}}
@php
$ar_judul = ['No','ISBN','Judul','Stok','Pengarang','Penerbit','Kategori','Action'];
$no = 1;  @endphp
    <a class="btn btn-primary" href="{{ route('buku.create') }}"
    role="button">Tambah</a>&nbsp;&nbsp;&nbsp;
    <a class="btn btn-secondary btn-md" href="{{ '/home' }}" role="button">Back</a><br/><br/>
    <table class="table table-striped">
    <thead>
        <tr>
        @foreach($ar_judul as $jdl)
            <th>{{ $jdl }}</th>  
        @endforeach
        </tr>
    </thead>
    <tbody>
@foreach($ar_buku as $b)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $b->isbn }}</td>
    <td>{{ $b->judul }}</td>
    <td>{{ $b->stok }}</td>
    <td>{{ $b->nama }}</td>
    <td>{{ $b->pen }}</td>
    <td>{{ $b->kat }}</td>
    <td>
        <form action="{{ route('buku.destroy',$b->id) }}" method="POST">
            @csrf {{-- security untuk menghindari dari serangan pada saat input form --}}
            @method('delete') {{-- method delete digunakan untuk menghapus data --}}
            <a class="btn btn-info" href="{{ route('buku.show',$b->id)}}">Detail</a>
            <a class="btn btn-success" href="{{ route('buku.edit',$b->id)}}">Edit</a>
            <button class="btn btn-danger" onlick="return confirm('Anda Yakin Data Dihapus')">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
