@extends('adminlte::page')
@section('title','Daftar Pengarang')
@section('content_header')
    <h1>Daftar Pengarang</h1>
@stop
@section('content') 
{{-- Isi Konten Data Pengarang --}}
@php
$ar_judul = ['No','Nama','Email','No HP','Foto','Action'];
$no = 1;  @endphp
    <a class="btn btn-primary" href="{{ route('pengarang.create') }}"
    role="button">Tambah</a>&nbsp;&nbsp;&nbsp;
    <a class="btn btn-secondary btn-md" href="{{ '/home' }}" role="button">Back</a><br/><br/>
    <table class="table table-striped">
    <thead>
    <tr>
    @foreach($ar_judul as $jdl)
    <th>{{ $jdl }}</th>  @endforeach
    </tr>
    </thead>
    <tbody>
@foreach($ar_pengarang as $pgr)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $pgr->nama }}</td>
    <td>{{ $pgr->email }}</td>
    <td>{{ $pgr->hp }}</td>
    <td width="10%">
    @php
    if(!empty($pgr->foto)){
    @endphp
        <img src="{{ asset('images')}}/{{ $pgr->foto }}" width="10%" class="card-img-top"/>
    @php
    }else{  
    @endphp
        <img src="{{ asset('images')}}/nophoto.jpg" width="10%" class="card-img-top"/>
    @php
    }
    @endphp
    </td>
    <td>
        <form action="{{ route('pengarang.destroy',$pgr->id) }}" method="POST">
            @csrf {{-- security untuk menghindari dari serangan pada saat input form --}}
            @method('delete') {{-- method delete digunakan untuk menghapus data --}}
            <a class="btn btn-info btn-sm me-2" href="{{ route('pengarang.show',$pgr->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-success btn-sm me-2" href="{{ route('pengarang.edit',$pgr->id)}}"><i class="fas fa-pen"></i></a>
            <button class="btn btn-danger btn-sm me-2" onclick="return confirm('Anda Yakin Data Dihapus')"><i class="fas fa-trash"></i></button>
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
