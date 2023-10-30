<?php
$news = [
    [
        "title" => "Dua Orang Tenaga Kesehatan Teladan Kabupaten Bangli Akan Terima Penghargaan di Istana Negara1",
        "image" => "berita1.jpg"
    ],
    [
        "title" => "Orientasi Dokter Umum Puskesmas, On The Job Training (OJT) pada 12 Puskesmas di Kabupaten Bangli",
        "image" => "berita 2.jpeg"
    ],
    [
        "title" => "BANGLI BANGUN GEDUNG LABORATORIUM BSL II",
        "image" => "berita 3.jpeg"
    ],
    [
        "title" => "DINAS KESEHATAN KABUPATEN BANGLI MENERIMA KUNJUNGAN STUDY TIRU DARI KAB. BANTAENG",
        "image" => "berita4.jpg"
    ],
    [
        "title" => "PELUNCURAN PROFIL KESEHATAN KABUPATEN BANGLI TAHUN 2022
            PELUNCURAN PROFIL KESEHATAN KABUPATEN BANGLI TAHUN 2022",
        "image" => "berita 5.jpeg"
    ],
    [
        "title" => "Pelepasan Seleksi Nakes Teladan Tingkat Provinsi Bali",
        "image" => "berita 6.jpeg"
    ],
];

$newss = $news;

if (isset($_GET['search'])) {
    if ($_GET['search'] != null) {

        $newss = [];
        foreach ($news as $new) {
            if (stripos($new["title"], $_GET["search"])) {
                $newss[] = $new;
            }
        }
    }
};

// var_dump( $newss);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPTD Puskesmas Bangli Utara</title>
        <link rel="shortcut icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <section id="header">
        <div class="outer">

            <div class="logo">
                <img src="asset/img/logo1.png" alt="">
            </div>

            <form action="index.php">
                <label for="search"><i class='bx bx-search'></i></label>
                <input type="text" name="search" id="search" placeholder="Cari Berita Seputaran Bangli">
            </form>

            <div class="row">
                <div class="col profil ">
                    <img src="asset/img/Bangli.png" alt="">
                    <p>Profil</p>
                </div>
                <div class="col pelayanan">
                    <img src="asset/img/pelayanan-publik.png" alt="">
                    <p>Standar Pelayanan Publik</p>
                </div>
                <div class="col kontak">
                    <img src="asset/img/kontak.png" alt="">
                    <p>Kontak</p>
                </div>
                <div class="col">
                    <img src="asset/img/keuangan.png" alt="">
                    <p>Transparansi Keuangan</p>
                </div>
                <div class="col">
                    <img src="asset/img/data.png" alt="">
                    <p>Satu Data</p>
                </div>
                <div class="col more">
                    <img src="asset/img/more.png" alt="">
                    <p>Lain-Lain</p>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="outer">
            <h4>Berita Terbaru</h4>
            <div class="row">
                <?php foreach ($newss as $new) : ?>
                    <a href="#" class="col">
                        <img src="asset/img/<?= $new["image"] ?>" alt="">
                        <div class="title">
                            <p><?= $new["title"] ?></p>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="outer">
            <div class="left box">
                <h4>UPTD Puskesmas Bangli Utara</h4>
                <p><i class='bx bxs-map'></i>Pengotan, Kec. Bangli, Kabupaten Bangli, Bali 80614</p>
                <p><i class='bx bxs-phone'></i>081775121848</p>
                <p><i class='bx bxl-gmail'></i>banglut12@gmail.com</p>
            </div>
            <div class="mid box">
                <h4>Situs Terkait</h4>
                <p><a href="https://www.dikes.banglikab.go.id/berita">Dinas Kesehatan Kabupaten Bangli</a></p>
                <p><a href="https://www.banglikab.go.id/">Kabupaten Bangli</a></p>
            </div>
            <div class="right box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.740386061482!2d115.3612695775921!3d-8.328574983860713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21e105f3bd20d%3A0xc82e4dbe5e3f6f94!2sPUSKESMAS%20BANGLI%20UTARA!5e0!3m2!1sid!2sid!4v1698112871719!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
            </div>
        </div>
    </section>

    <section id="popup" class="profil-popup popup">
        <div class="outer">
            <div class="btn">
                <i class='bx bx-x close'></i>
            </div>
            <h4>Profil</h4>

            <div class="container">
                <div class="box left">
                    <img src="asset/img/Dokter.JPG" alt="Foto kepala upt">
                    <h2>Kepala UPTD Puskesmas</h2>
                    <h4>-</h4> <!-- nama dokter -->
                </div>
                <div class="box right">
                    <a href="#" class="col">
                        <img src="asset/img/visi.png" alt="">
                        <p>Viisi, Misi, Tata Nilai dan Maklumat Pelayanan</p>
                    </a>
                    <a href="#" class="col">
                        <img src="asset/img/struktur.png" alt="">
                        <p>Struktur Organisasi</p>
                    </a>
                    <a href="#" class="col">
                        <img src="asset/img/tugas.png" alt="">
                        <p>Tugas Pokok dan Integrasi Petugas</p>
                    </a>
                    <a href="#" class="col">
                        <img src="asset/img/maps.png" alt="">
                        <p>Wilayah Kerja</p>
                    </a>
                    <a href="#" class="col">
                        <img src="asset/img/penghargaan.png" alt="">
                        <p>Penghargaan</p>
                    </a>
                    <a href="#" class="col">
                        <img src="asset/img/default.png" alt="">
                        <p>Sumber Daya Manusia</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="popup" class="pelayanan-popup popup">
        <div class="outer">
            <div class="btn">
                <i class='bx bx-x p-close'></i>
            </div>
            <h4>Standar Pelayanan Publik</h4>
            <div class="row">
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Jenis-Jenis dan Waktu Pelayanan</p>
                </a>
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Tarif Retribusi Pelayanan Puskesmas</p>
                </a>
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Informasi Prosedur dan Alur Pengaduan</p>
                </a>
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Informasi Prosedur dan Alur Pengaduan</p>
                </a>
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Hasil Survey Kepuasan Masyarakat</p>
                </a>
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Tindak Lanjut Survey Kepuasan Masyarakat</p>
                </a>
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>INOVASI UPTD PUSKESMAS I DINAS KESEHATAN KECAMATAN DENPASAR SELATAN</p>
                </a>
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Standar Pelayanan Puskesmas</p>
                </a>
            </div>
        </div>
    </section>

    <section id="popup" class="kontak-popup popup ">
        <div class="outer">
            <div class="btn">
                <i class='bx bx-x k-close'></i>
            </div>
            <h4>Kontak</h4>
            <div class="row">
                <a href="#" class="col">
                    <h3><i class='bx bxl-whatsapp'></i></h3>
                    <p>Whatsapp</p>
                </a>
                <a href="#" class="col">
                    <h3><i class='bx bxl-facebook'></i></h3>
                    <p>Facebook</p>
                </a>

            </div>
        </div>
    </section>

    <section id="popup" class="more-popup popup ">
        <div class="outer">
            <div class="btn">
                <i class='bx bx-x m-close'></i>
            </div>
            <h4>Lain-Lain</h4>
            <div class="row">
                <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Agenda</p>
                </a> <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Pengumuman</p>
                </a> <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Artikel</p>
                </a> <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Foto</p>
                </a> <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Video</p>
                </a> <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Download</p>
                </a>
                </a> <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Situs Terkait</p>
                </a>
                </a> <a href="#" class="col">
                    <img src="asset/img/default.png" alt="">
                    <p>Sitemap</p>
                </a>

            </div>
        </div>
    </section>

    <script>
        let popup = document.querySelector(".popup");
        let profil = document.querySelector(".profil");
        let profil_popup = document.querySelector(".profil-popup");
        let pelayanan = document.querySelector(".pelayanan");
        let pelayanan_popup = document.querySelector(".pelayanan-popup");
        let kontak = document.querySelector(".kontak");
        let kontak_popup = document.querySelector(".kontak-popup");
        let more = document.querySelector(".more");
        let more_popup = document.querySelector(".more-popup");
        let close = document.querySelector(".close");
        let p_close = document.querySelector(".p-close");
        let k_close = document.querySelector(".k-close");
        let m_close = document.querySelector(".m-close");

        m_close.addEventListener("click", () => {
            more_popup.classList.remove("show");
        });
        p_close.addEventListener("click", () => {
            pelayanan_popup.classList.remove("show");
        });
        k_close.addEventListener("click", () => {
            kontak_popup.classList.remove("show");
        });

        close.addEventListener("click", () => {
            popup.classList.remove("show");
            // pelayanan_popup.classList.remove("show");
        });

        profil.addEventListener("click", () => {
            profil_popup.classList.add("show");
        });
        pelayanan.addEventListener("click", () => {
            pelayanan_popup.classList.add("show");
        });
        kontak.addEventListener("click", () => {
            kontak_popup.classList.add("show");
        });
        more.addEventListener("click", () => {
            more_popup.classList.add("show");
        });
    </script>
</body>

</html>