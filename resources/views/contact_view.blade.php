<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Himpunan</title>
    <style>
        .logo {display: flex;align-items: center;gap: 10px;}
        .logo img {width: 40px;height: 40px;object-fit: contain;}
        body{margin:0;font-family:Arial,sans-serif;background:#f4f7ff;color:#1f2a44}
        .container{max-width:1080px;margin:0 auto;padding:0 16px}
        header{background:#fff;border-bottom:1px solid #dfe6ff;position:sticky;top:0}
        nav{display:flex;justify-content:space-between;align-items:center;padding:14px 0}
        nav a{text-decoration:none;color:#3b4b7c;margin-left:14px} .hero{padding:20px 0}
        .badge{display:inline-block;background:#e8edff;color:#1e45d8;padding:8px 12px;border-radius:999px;font-size:13px} h1{font-size:36px;margin:10px 0} p{line-height:1.7;color:#4b5b86} section{padding:20px 0}
        .contact-wrapper{display:grid; grid-template-columns:1fr 1fr; gap:20px;}
        .card{ background:#fff; border:1px solid #dfe6ff; border-radius:10px; padding:20px;}
        .form-group{ margin-bottom:12px;}
        .form-group label{  display:block; margin-bottom:5px; font-size:14px;}
        .form-group input, .form-group textarea{ width:100%; padding:10px; border:1px solid #dfe6ff; border-radius:6px; outline:none;} 
        .form-group textarea{ resize:none; height:100px; }.btn{
        display:inline-block; background:#2b59ff; color:#fff; border:none; padding:10px 16px; border-radius:8px; cursor:pointer; }.info p{margin:6px 0; }
        footer{margin-top:30px; padding:20px 0; border-top:1px solid #dfe6ff;text-align:center;color:#5c6b94
        }@media(max-width:768px){.contact-wrapper{grid-template-columns:1fr;}}
    </style>
</head>
<body>
<header>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="{{ asset('images/logo_hmit.png') }}" alt="Logo HMIT">
                <strong>HIMPUNAN MAHASISWA INFORMATIKA</strong>
            </div>
            <div class="menu"> 
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
        <span class="badge">Hubungi Kami</span>
        <h1>Contact Us</h1>
        <p>
            Punya pertanyaan, saran, atau ingin bekerja sama?<br>
            Silakan hubungi kami melalui form di bawah ini.
        </p>
    </section>
    <section class="contact-wrapper">
        <div class="card">
            <h3>Kirim Pesan</h3>
            @if(session('success'))
                <div style="background:#d4edda;padding:10px;border-radius:6px;color:#155724;margin-bottom:10px;">
                {{ session('success') }}
        </div>
    @endif
            <form method="POST" action="/contact">
            @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email">
        </div>
        <div class="form-group">
            <label>Pesan</label>
            <textarea name="pesan" placeholder="Tulis pesan kamu..."></textarea>
        </div>
        <button class="btn">Kirim Pesan</button>
    </form>
        </div>
        <div class="card info">
            <h3>Informasi Kontak</h3>
            <p><strong>Email:</strong> hmit@uts.ac.id</p>
            <p><strong>Instagram:</strong> @hmit.uts</p>
            <p><strong>Alamat:</strong> Universitas Teknologi Sumbawa</p>
            <hr style="margin:15px 0; border:1px solid #dfe6ff;">
            <h4>Jam Operasional</h4>
            <p>Senin - Jumat : 08.00 WITA - 18.00 WITA</p>
            <p>Sabtu - Minggu : 08.00 WITA - 20.00 WITA</p>
        </div>
    </section>
</main>
<footer>
    <p> 2026 Himpunan Mahasiswa Informatika</p>
</footer>
</body>
</html>