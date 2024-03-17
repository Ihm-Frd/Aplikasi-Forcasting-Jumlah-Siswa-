<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="public/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/css/home.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Mohamad Ilham Firdaus</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../public/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li> 
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tentang">Tentang</a></li>
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li> -->
                    
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- Home-->
            <section class="resume-section" id="home">
                <div class="resume-section-content">
                    <h2 class="mb-0">
                    SELAMAT DAT<span class="text-primary">ANG DI APLIKASI</span>
                    </h2>
                    <h2 class="mb-0">
                    FORECASTING Jumlah<span class="text-primary"> Penerimaan Siswa Baru</span>
                    </h2>
                    <div class="subheading mb-5">
                    By : Mohamad Il<span class="text-primary">ham Firdaus</span> - 
                        <a href="https://instagram.com/ihm_frd?igshid=NzZlODBkYWE4Ng==">312010313</a>
                    </div>
                    <p class="lead mb-5">Optimalkan Masa Depan Penerimaan Siswa: Aplikasi Forecasting kami memberikan visi yang tepat untuk tahun-tahun mendatang. Dengan data historis yang akurat, Anda dapat merencanakan langkah-langkah yang cerdas untuk penerimaan siswa baru dengan percaya diri. Persiapkan masa depan pendidikan Anda dengan tepat dan efisien menggunakan aplikasi ini sebagai alat kunci dalam strategi penerimaan siswa yang sukses</p>
                    <div class="social-icons">
                        <a href="view/index.php" class="btn btn-outline-success btn-lg col-6"><b>Coba Prediksi Sekarang</b></a>
                        <a class="social-icon m-5" href="https://instagram.com/ihm_frd?igshid=NzZlODBkYWE4Ng=="><i class="fa-brands fa-square-instagram"></i></a>
                        <a class="social-icon" href="https://github.com/Ihm-Frd"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
           
            <!-- tentang-->
            <section class="resume-section" id="tentang">
                <div class="resume-section-content">
                    <h2 class="mb-5">Tentang</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Aplikasi apakah ini ?</h3>
                            <div class="subheading mb-3">Prediksi jumlah siswa baru di tahun selanjut nya </div>
                            <div>    
                            Aplikasi ini memanfaatkan data penerimaan siswa dari database untuk analisis regresi sederhana. Tabel ditampilkan dengan statistik dasar seperti jumlah, rata-rata, dan koefisien regresi (B1) serta konstanta (B0). Ada fitur prediksi yang memperhitungkan jumlah siswa berdasarkan input tahun tertentu. Fungsi reset halaman dan pencarian berdasarkan tanggal juga disediakan untuk kemudahan pengguna.
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Desember 2023</span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                        <h3 class="mb-0">Logika Perhitungan</h3>
                            <div class="subheading mb-3">Regresi linear</div>
                            <div>
                                
                            Aplikasi ini melakukan regresi linear sederhana dari data siswa baru yang diterima. Ini menghitung koefisien regresi (B1) dan konstanta (B0) untuk menemukan hubungan linier antara tahun akademik (X) dan jumlah siswa baru (Y) dalam dataset. Prosesnya mencakup:

                            Pengumpulan Data: Data dari tabel "data_penerimaan_siswa" diambil dari database.
                            Perhitungan Statistik Dasar: Melalui iterasi data, dihitung jumlah, rata-rata, dan hubungan antara X dan Y.
                            Perhitungan Koefisien Regresi: Koefisien regresi (B1) dan konstanta (B0) dihitung untuk menemukan hubungan linier antara X dan Y.
                            Tampilan Hasil: Menampilkan koefisien regresi, konstanta, serta rumus regresi linear (Y = B0 + B1X).
                            Tujuannya adalah untuk memahami tren atau hubungan antara tahun akademik (X) dan jumlah siswa baru (Y) berdasarkan data yang diamati.
                            </div>
                            
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Desember 2023</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="public/js/scripts.js"></script>
    </body>
</html>
