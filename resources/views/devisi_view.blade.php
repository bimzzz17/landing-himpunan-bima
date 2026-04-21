<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devisi Himpunan</title>

    <style>
        body{
            margin:0;
            font-family:Arial,sans-serif;
            background:linear-gradient(135deg,#eef2ff,#f8fbff);
            color:#1f2a44;
        }

        .container{
            max-width:1100px;
            margin:auto;
            padding:20px;
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
            margin-left:15px;
            font-weight:500;
        }

        nav a:hover{
            color:#2b59ff;
        }

        /* HERO */
        .hero{
            text-align:center;
            padding:40px 0;
        }

        .hero h1{
            font-size:40px;
            margin-bottom:10px;
        }

        .hero p{
            color:#5c6b94;
        }

        /* DEVISI GRID */
        .devisi-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
            margin-top:30px;
        }

        .devisi-card{
            background:#fff;
            padding:25px;
            border-radius:15px;
            text-align:center;
            border:1px solid #e0e6ff;
            transition:0.3s;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
        }

        .devisi-card:hover{
            transform:translateY(-8px);
            box-shadow:0 10px 25px rgba(0,0,0,0.1);
        }

        .icon{
            width:60px;
            height:60px;
            background:#2b59ff;
            color:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:50%;
            font-size:24px;
            margin:auto;
            margin-bottom:15px;
        }

        .devisi-card h3{
            margin-bottom:10px;
        }

        .devisi-card p{
            font-size:14px;
            color:#5c6b94;
        }

        footer{
            text-align:center;
            margin-top:40px;
            padding:20px;
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
        <h1>Struktur Departemen</h1>
        <p>Kenali setiap Departemen dalam Himpunan Mahasiswa Informatika</p>
    </section>

    <!-- DEVISI -->
    <section class="devisi-grid">

        <div class="devisi-card">
            <div class="icon">👑</div>
            <h3>BPH</h3>
            <p>Kepanjangan dari Badan Pengurus Harian yang bertugas sebagai pemimpin bergeraknya himpunan.</p>
        </div>

        <div class="devisi-card">
            <div class="icon">💻</div>
            <h3>Divisi PWTI</h3>
            <p>Mengelola sistem informasi, website, dan pengembangan teknologi dalam organisasi.</p>
        </div>

        <div class="devisi-card">
            <div class="icon">🎨</div>
            <h3>Divisi MEDIA</h3>
            <p>Bertanggung jawab atas desain grafis, konten sosial media, dan publikasi.</p>
        </div>

        <div class="devisi-card">
            <div class="icon">🤝</div>
            <h3>Divisi SOSMAS</h3>
            <p>Membangun relasi dengan pihak luar serta menjaga komunikasi organisasi.</p>
        </div>

        <div class="devisi-card">
            <div class="icon">🧑‍💻</div>
            <h3>Divisi PSDM</h3>
            <p>Mendukung kegiatan akademik mahasiswa seperti pelatihan dan seminar.</p>
        </div>

        <div class="devisi-card">
            <div class="icon">💰</div>
            <h3>Divisi EKRAF</h3>
            <p>sebagai penggerak utama pertumbuhan ekonomi melalui pemanfaatan ide, kreativitas, dan inovasi..</p>
        </div>
        <div class="devisi-card">
            <div class="icon">💪</div>
            <h3>Divisi KESRA</h3>
            <p>Sebagai wadah untuk mengembangkan minat, bakat, dan kreativitas anggota dalam bidang seni, budaya, serta olahraga..</p>
        </div>


    </section>

</main>

<footer>
    <p>© 2026 Himpunan Mahasiswa Informatika</p>
</footer>

</body>
</html>