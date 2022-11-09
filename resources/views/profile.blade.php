<h2>
<h1>
    Ini halaman file view dari contact
    <br>
    Halo, <?php echo $name; ?> <!--Versi PHP Native-->
    <br>
    Hai, {{ $name }} <!--Versi blade laravel-->
</h1>
<hr>
<h2>Profile</h2>
<p>
    Nama : {{$name}} <br>
    No HP : {{$phone}} <br>
    Position : {{$position}} <br>
    Tanggal lahir : {{$lahir}} <br>
    Jenis Kelamin : {{$jk}} <br>
    Sekolah : {{$position}} <br>
</p>
</h2>