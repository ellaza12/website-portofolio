<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Portofolio Ella Zalian</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== LineIcons CSS ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<div class="container">
    <br>
    <h2> Data Pendidikan </h2>
    <hr>
    <a href="/pendidikan/create" class="btn btn-primary"> Tambah Pendidikan </a>
    <a href="/" class="btn btn-success" style="background-color: #00A78E">Halaman Utama</a>
    <hr>
    <div class="row">
    @foreach ($pendidikans as $data )
    <div class="col md-4">
        <div class="card mb-3" style="max-width: 500px;">
            <div class="card-body">
                <h5 class="card-title"> {{ $data->institusi }}</h5>
                <h6 class="card-text">{{ $data->nama_sekolah }}</h6>
                <p class="card-text">{{ $data->rentang_waktu }}</p><br>
                <a href="/pendidikan/{{ $data->id }}/edit"  class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                <form action="/pendidikan/{{ $data->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin akan menghapus data ?')">
                        <i class="bi bi-bucket"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>


 <!--====== Jquery js ======-->
 <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
 <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

 <!--====== Bootstrap js ======-->
 <script src="assets/js/popper.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>


 <!--====== Appear js ======-->
 <script src="assets/js/jquery.appear.min.js"></script>

 <!--====== Scrolling Nav js ======-->
 <script src="assets/js/jquery.easing.min.js"></script>
 <script src="assets/js/scrolling-nav.js"></script>

 <!--====== Main js ======-->
 <script src="assets/js/main.js"></script>


</html>
