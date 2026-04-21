<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Proker Himpunan</title>

<style>
body{
    margin:0;
    font-family:Arial,sans-serif;
    background:#f4f7ff;
    color:#1f2a44;
}

/* NAVBAR */
.container{
    max-width:1100px;
    margin:auto;
    padding:0 16px;
}

header{
    background:#fff;
    border-bottom:1px solid #dfe6ff;
    position:sticky;
    top:0;
}

nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:14px 0;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
}

.logo img{
    width:40px;
}

nav a{
    text-decoration:none;
    color:#3b4b7c;
    margin-left:14px;
    font-weight:500;
}

/* HERO */
.hero{
    text-align:center;
    padding:40px 0 20px;
}

.hero h1{
    font-size:36px;
    margin-bottom:10px;
}

.hero p{
    color:#4b5b86;
}

/* PROKER GALLERY */
.proker-section{
    margin-top:20px;
}

.proker-title{
    text-align:center;
    margin-bottom:20px;
}

.gallery{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:18px;
}

/* CARD FOTO */
.proker-card{
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 6px 14px rgba(0,0,0,0.08);
    transition:0.3s;
}

.proker-card:hover{
    transform:translateY(-5px);
}

/* IMAGE */
.proker-card img{
    width:100%;
    height:180px;
    object-fit:cover;
}

/* CONTENT */
.proker-content{
    padding:14px;
}

.proker-content h3{
    margin:0;
    font-size:18px;
}

.proker-content p{
    font-size:14px;
    color:#5c6b94;
    margin-top:6px;
}

/* FOOTER */
footer{
    margin-top:40px;
    padding:20px;
    text-align:center;
    border-top:1px solid #dfe6ff;
    color:#5c6b94;
}
</style>

</head>

<body>

<header>
<div class="container">
<nav>

<div class="logo">
<img src="{{ asset('images/logo_hmit.png') }}">
<strong>HIMPUNAN MAHASISWA INFORMATIKA</strong>
</div>

<div>
    <a href="/">Home</a>
    <a href="/anggota_view">Anggota</a>
    <a href="/devisi_view">Departemen</a>
    <a href="/proker_view">Proker</a>
    <a href="/contact_view">Contact</a>
</div>

</nav>
</div>
</header>

<main class="container">

<!-- HERO -->
<section class="hero">
<h1>Program Kerja</h1>
<p>Dokumentasi kegiatan proker Himpunan Mahasiswa Informatika</p>
</section>

<!-- PROKER GALLERY -->
<section class="proker-section">

<div class="proker-title">
<h2>Dokumentasi Kegiatan</h2>
</div>

<div class="gallery">

<!-- CARD 1 -->
<div class="proker-card">
<img src="{{ asset('images/Botcamp.png') }}">
<div class="proker-content">
<h3>IT Bootcamp</h3>
<p>Pelatihan UI/UX untuk siswa SMA/SMK</p>
</div>
</div>

<!-- CARD 2 -->
<div class="proker-card">
<img src="{{ asset('images/Kelas.png') }}">
<div class="proker-content">
<h3>Kelas PWTI</h3>
<p>Pelatihan coding untuk mahasiswa informatika</p>
</div>
</div>

<!-- CARD 3 -->
<div class="proker-card">
<img src="{{ asset('images/Desa.png') }}">
<div class="proker-content">
<h3>Desa Digital</h3>
<p>Kegiatan sosial berbasis teknologi di desa</p>
</div>
</div>

<!-- CARD 4 -->
<div class="proker-card">
<img src="{{ asset('images/kader.png') }}">
<div class="proker-content">
<h3>Kaderisasi</h3>
<p>kegiatan untuk pengembangan dalam 5 kultur Mahasiswa baru Informatika</p>
</div>
</div>

</div>

</section>

</main>

<footer>
<p>Email: hmit@uts.ac.id | Instagram: @hmit.uts</p>
</footer>

</body>
</html>