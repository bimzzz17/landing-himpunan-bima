<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page Himpunan</title>
    <style>
        .logo {display: flex;align-items: center;gap: 10px;}.logo img {width: 40px;height: 40px;object-fit: contain;}
        body{margin:0;font-family:Arial,sans-serif;background:#f4f7ff;color:#1f2a44}
        .container{max-width:1080px;margin:0 auto;padding:0 16px}
        header{background:#fff;border-bottom:1px solid #dfe6ff;position:sticky;top:0}
        nav{display:flex;justify-content:space-between;align-items:center;padding:14px 0}
        nav a{text-decoration:none;color:#3b4b7c;margin-left:14px}
        .hero{padding:2px 0 1px}
        .badge{display:inline-block;background:#e8edff;color:#1e45d8;padding:8px 12px;border-radius:999px;font-size:13px}
        h1{font-size:42px;line-height:1.2;margin:14px 0}
        p{line-height:1.7;color:#4b5b86}
        .btn{display:inline-block;background:#2b59ff;color:#fff;text-decoration:none;padding:10px 16px;border-radius:8px;margin-top:10px}
        section{padding:1px 0}
        .cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px}
        .card{background:#fff;border:1px solid #dfe6ff;border-radius:10px;padding:14px}
        footer{margin-top:30px;padding:20px 0;border-top:1px solid #dfe6ff;text-align:center;color:#5c6b94}
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
                    <a href="/anggota_view">Anggota</a>
                    <a href="/devisi_view">Departemen</a>
                    <a href="/proker_view">Proker</a>
                    <a href="/contact_view">Contact Us</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="hero">
            <span class="badge">Organisasi Mahasiswa</span>
            <h1>Wadah Berkembang Mahasiswa Informatika</h1>
            <p style="margin: 2px 0;">
                Selamat datang di website resmi Himpunan Mahasiswa Informatika.
                <br>
                #Dari Inisiatif Menjadi Dampak
            </p>
        </section>
        <section id="tentang">
            <h2 style="margin: 0;">Tentang Kami</h2>
            <div class="cards">
                <div class="card"><strong>Visi</strong><p>Mewujudkan Himpunan Mahasiswa Informatika Yang Progresif, Kolaboratif, dan Berdampak Melalui Inisiatif-inisiatif Inovatif Yang Relevan Dengan Perkembangan Teknologi dan Kebutuhan Mahasiswa</p></div>
                <div class="card"><strong>Misi</strong><p>1.Mendorong budaya inisiatif mahasiswa dalam pengembangan akademik, minat bakat, dan karya teknologi. <br>2.Menghadirkan program kerja yang inovatif dan relevan guna meningkatkan kolaborasi antar anggota himpunan.</p></div>
        </section>
        <section id="proker">
            <h2 style="margin: 2px 0;">Program Kerja Unggulan</h2>
            <div class="cards">
                <div class="card"><strong>IT Bootcamp</strong><p>Perlombaan UI/UX Untuk Siswa Kabupaten Sumbawa</p></div>
                <div class="card"><strong>Kelas PWTI</strong><p>Pelatihan Coding Atau Yang Berhubungan Dengan Prodi Untuk Semua Mahasiswa Informatika.</p></div>
                <div class="card"><strong>Desa Digital</strong><p>Kegiatan Sosial Berbasis Teknologi Ke Desa.</p></div>
            </div>
        </section>
        <section id="kontak">
            <p style="margin: 4;">Contact: Email: hmit@uts.ac.id | Instagram: @hmit.uts</p>
        </section>
    </main>
</body>
</html>
