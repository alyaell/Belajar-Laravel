@extends('layout')

@section('title', 'Home Page')

@section('content')
<h2>About</h2>
<div>
    <p>Berikutfasilitas yang bisa anda gunakan. Login sebagai:</p>
    @if($role=="admin")
        Admin - Menambahkan,Mengedit,Menghapus Barang
    @elseif($role == "teller")
        Teller - Mengunduh laporan KWU
    @else
        Kamu aneh,role tidak diketahui.
    @endif
</div>
@endsection