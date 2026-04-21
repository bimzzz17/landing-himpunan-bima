<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Anggota Himpunan</title>
<style>
body{
    margin:0; font-family:Arial,sans-serif; background:#f4f7ff; color:#1f2a44
}
.container{
    max-width:1080px; margin:0 auto; padding:0 16px
}
.logo {display:flex; align-items:center; gap:10px;
}
.logo img {width:40px; height:40px;
}
header{background:#fff; border-bottom:1px solid #dfe6ff; position:sticky; top:0
}
nav{display:flex; justify-content:space-between; align-items:center; padding:14px 0
}
nav a{text-decoration:none; color:#3b4b7c; margin-left:14px
}
.hero{padding:20px 0
}
.badge{background:#e8edff; color:#1e45d8; padding:6px 12px; border-radius:999px; font-size:13px
}
h1{font-size:36px; margin:10px 0
}
p{color:#4b5b86
}
.anggota-grid{display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:16px; margin-top:20px
}
.anggota-card{background:#fff; border-radius:12px; padding:16px; text-align:center; border:1px solid #dfe6ff; transition:0.3s;
}
.anggota-card img{width:100%; height:220px; object-fit:cover; border-radius:10px;
}
.anggota-card h3{margin:10px 0 5px;
}
.anggota-card p{font-size:14px; color:#5c6b94;
}
.anggota-card:hover{transform:translateY(-5px); box-shadow:0 10px 25px rgba(0,0,0,0.08);
}
footer{margin-top:40px; padding:20px 0; border-top:1px solid #dfe6ff; text-align:center; color:#5c6b94
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
<section class="hero">
    <span class="badge">Organisasi Mahasiswa</span>
    <h1>Anggota Himpunan</h1>
    <p>Berikut adalah struktur anggota aktif Himpunan Mahasiswa Informatika</p>
</section>
<section>
<div class="anggota-grid">
    <div class="anggota-card">
        <img src="{{ asset('images/anggota.jpg') }}">
        <h3>Ahsanul Ikram</h3>
        <p>Ketua Himpunan</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/aku.png') }}">
        <h3>Bima Saputra Siregar</h3>
        <p>Wakil Ketua Himpunan</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota2.jpg') }}">
        <h3>Khaera Mir'ah Andina</h3>
        <p>Sekretaris Umum 1</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota.jpg') }}">
        <h3>Teguh Bagus Safutra</h3>
        <p>Sekretaris Umum 2</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota2.jpg') }}">
        <h3>Reza Dhia Qalbuana</h3>
        <p>Bendahara Umun 1</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota2.jpg') }}">
        <h3>Dinda Oktavia Pratiwi</h3>
        <p>Bendahara Umum 2</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota2.jpg') }}">
        <h3>Tiwi Rudiastini</h3>
        <p>Kadep SOSMAS</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota.jpg') }}">
        <h3>Imam Ikhlasul Jihad</h3>
        <p>Kadep PWTI</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota.jpg') }}">
        <h3>M.Andika Afriliyan</h3>
        <p>Kadep KESRA</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota.jpg') }}">
        <h3>Dicky Armansyah</h3>
        <p>Kadep PSDM</p>
    </div>
    <div class="anggota-card">
        <img src="{{ asset('images/anggota2.jpg') }}">
        <h3>Nabila Isnaini</h3>
        <p>Kadep EKRAF</p>
    </div>
</div>
</section>
</main>
<footer>
    <p> 2026 Himpunan Mahasiswa Informatika</p>
</footer>
</body>
</html>