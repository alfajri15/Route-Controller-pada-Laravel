@extends('adminlte::page')  
@section('title', 'Detail Pengarang')  
@section('content_header')
    <h1>Detail Pengarang</h1>  
@stop  
@section('content')
{{-- Ini Konten Detail Data Pengarang --}}  
@foreach($ar_pengarang as $pgr)
    <div class="media">
        <div>
        @php
        if(!empty($pgr->foto)){
        @endphp
            <img src="{{ asset('images')}}/{{ $pgr->foto }}" width="100px" height="100px" class="card-img-top"/>
        @php
        }else{  
        @endphp
            <img src="{{ asset('images')}}/nophoto.jpg" width="100px" height="100px" class="card-img-top"/>
        @php
        }
        @endphp
        </div>&ensp;
        <div class="media-body">
            <p>
                Nama : {{ $pgr->nama }}<br/>
                Email : {{ $pgr->email }}<br/>
                Nomor Hp : {{ $pgr->hp }}<br/>
            </p>
            <hr/><a href="{{ url('/pengarang') }}" class="btn btn-info">Go Back</a>
        </div>    
    </div>
@endforeach
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">  
@stop
@section('js')
    <script> console.log('Hi!'); </script>  
@stop
