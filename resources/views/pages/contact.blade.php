@extends('layout')

@section('title', 'Contact Page')

@section('content')
    <h2>Contact</h2>
    <div>
        @for($i = 1; $i <= 10; $i++)
            Nomor {{ $i }} <br>
        @endfor

        @foreach ($person as $data)
            Kontak {{ $loop->iteration}} : {{ $data }} <br>
        @endforeach
    </div>
@endsection