<?php
                  include "Koneksi.php";
                  if(isset($_POST['bsimpan'])){
                    mysqli_query($connect, "insert into biodata set
                    Nama = '$_POST[tnama]',
                    NIM = '$_POST[tnim]',
                    TTL = '$_POST[tttl]',
                    Status = '$_POST[tstatus]',
                    ALamat = '$_POST[talamat]',
                    Prodi = '$_POST[tprodi]'");
                  }
                  
                  include "Koneksi.php";
                  if(isset($_POST['simpan'])){
                    mysqli_query($connect, "insert into riwayat_pendidikan set
                    Nama = '$_POST[tnama]',
                    SD = '$_POST[tsd]',
                    SMP = '$_POST[tsmp]',
                    SMA = '$_POST[tsma]',
                    S1 = '$_POST[ts1]'");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.9.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Irmawati Mansyur</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>Saya seorang mahasiswa <span>fakultas Teknik</span> UNCP</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#portfolio">Portofolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          <li><a class="nav-link" href="#biodata">Biodata</a></li>
          <li><a class="nav-link" href="#pendidikan">Pendidikan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Biodata Singkat</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Sedikit tentang saya </h3>
          <p class="fst-italic">
            Saya seorang mahasiswa semester 5 Prodi Infomatika Fakultas Komputer di Universitas Cokroaminoto Palopo.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span>Irmawati Mansyur</li>
                <li><i class="bi bi-chevron-right"></i> <strong>TTL:</strong> <span>10 Maret 2001</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>No.HP:</strong> <span>+62 823 2813 6342</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Palopo, Sulawesi Selatan</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>21</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>irmawatimansyur2@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>Mahasiswa</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Silahkan Cek Resume saya</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Riwayat</h3>
          <div class="resume-item pb-0">
            <h4>Irmawati Mansyur</h4>
            <p><em>Irmawati Mansyur atau biasa di panggil Irma berasal dari Poso Sulawesi tengah, dan sekarang tinggal di kota Palopo semenjak duduk di bangku Sekolah Menengah Kejuruan pada tahun 2018 dan sekarang menjadi salah satu mahasiswa Cokroaminoto Palopo, Prodi Informatika. 
              Ia lahir di Tambarana pada tanggal 10 Maret 2001. Ia merupakan anak ke-6 dari 6 bersaudara yang artinya ia merupakan anak bungsu.</em></p>
            <p>
            <ul>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Riwayat Pendidikan</h4>
            <h5>2006 - sekarang</h5>
            <p>
            <ul>
              <li>Sd Negeri 1 Tambarana</li>
              <li>Smp Negeri 2 Poso Pesisir Utara</li>
              <li>Smk Negeri 4 Palopo</li>
              <li>Universitas Cokroaminoto Palopo</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Potret Kebersamaan</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/IMG_5144.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>DOKUMENTASI 1</h4>
              <p>DOKUMENTASI</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/IMG_5144.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/IMG_1302.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/IMG_1302.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/IMG_4049.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/IMG_4049.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/IMG_5036.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/IMG_5036.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/IMG_1286.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/IMG_1286.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/675e0c2b-1a7e-4b46-8489-c9218ca178b8.JPG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/675e0c2b-1a7e-4b46-8489-c9218ca178b8.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Kontak</h2>
        <p>Kontak Saya</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Alamat Saya</h3>
            <p>Btn.Hartaco Blok 2F No.2. Kecamatan Wara Timur, Kelurahan Benteng. Palopo, Sulawesi Selatan.</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Profil Sosmed</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>irmawatimansyur2@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Kontak Saya</h3>
            <p>+62 823 2813 6342</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Kirim Pesan Kepada Saya</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Biodata Section ======= -->
  <section id="biodata" class="biodata">
    <div class="container">

    <div class="container" data-aos="fade-up">
            <h3 class="text-center text-warning"><strong>Form Input</strong></h3>

            <!-- awal row -->
            <div class="row">
              <div class="col-md-8 mx-auto">
                <!-- awal card -->
                  <div class="card mt-3 text-dark">
                      
                      <div class="card-body">
                        <!-- awal form -->
                          <form method="POST">
                            <div class="card-header  text-center">
                            <strong>Form Input Data</strong> 
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">NIM</label>
                              <input type="text" name="tnim" class="form-control" placeholder="Masukkan NIM">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">TTL</label>
                              <input type="date" name="tttl" class="form-control" placeholder="Masukkan TTL">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Status</label>
                              <input type="text" name="tstatus" class="form-control" placeholder="Masukkan Status">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <input type="text" name="talamat" class="form-control" placeholder="Masukkan Alamat">
                            </div>

                            <div class="mb-3">
                             <label for="">Prodi</label>
                             <select name="tprodi" class="form-label" id="">
                                    <option value="">Pilih</option>
                                    <option value="S1 Infromatika">S1 Informatika</option>
                                    <option value="S1 Pertanian">S1 Pertanian</option>
                                    <option value="S1 PGSD">S1 PGSD</option>
                            </select>
                            <div class="text-center">
                                <button class="btn btn-warning" name="bsimpan" type="submit"> Simpan</button>
                            </div>
                        </form>
                        <!-- akhir form -->
                      </div>
                  </div>
                <!-- akhir card -->
              </div>

            </div>
            <!-- akhir row -->

            <!-- Awal Card -->
        <div class="col-md-10 mx-auto">
            <div class="card mt-5">
                <div class="card-header bg-warning text-light">
                  Data Yang Diinput
                  </div>
                  <div class="card-body">
                  <table class="table table-striped table-hover table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>TTL</th>
                      <th>Status</th>
                      <th>Alamat</th>
                      <th>Prodi</th>
                    </tr>
                    
                    <?php
                    include "Koneksi.php";
                    $No=1;
                    $ambildata = mysqli_query($connect,"select * from biodata");
                    while ($tampil = mysqli_fetch_array($ambildata)){
                      echo "

                    <tr>
                      <td>$No</td>
                      <td>$tampil[Nama]</td>
                      <td>$tampil[NIM]</td>
                      <td>$tampil[TTL]</td>
                      <td>$tampil[Status]</td>
                      <td>$tampil[Alamat]</td>
                      <td>$tampil[Prodi]</td>
                    </tr>";

                    $No++;
                  }
                  ?>
                  </table>
                  </div>
              </div>
        <!-- Akhir Card -->
            </section><!-- End About Section -->
<!-- ======= Pendidikan Section=======-->
  </section><!-- End Pendidikan Section -->

<!-- ======= Pendidikan Section ======= -->
<section id="pendidikan" class="pendidikan">
    <div class="container">

      <div class="section-title">
        <h2>Pendidikan</h2>
        <p>Input Riwayat Pendidikan</p>
      </div>

      <div class="container" data-aos="fade-up">
            <h3 class="text-center text-warning"><strong>Form Input</strong></h3>

            <!-- awal row -->
            <div class="row">
              <div class="col-md-8 mx-auto">
                <!-- awal card -->
                  <div class="card mt-2">
                      
                      <div class="card-body">
                        <!-- awal form -->
                          <form method="POST" class="text-dark">
                            <div class="card-header  text-center text-dark">
                            <strong>Input Data</strong> 

                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">SD</label>
                              <input type="text" name="tsd" class="form-control" placeholder="Masukkan Asal SD">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">SMP</label>
                              <input type="text" name="tsmp" class="form-control" placeholder="Masukkan Asal SMP">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">SMA</label>
                              <input type="text" name="tsma" class="form-control" placeholder="Masukkan Asal SMA">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">S1</label>
                              <input type="text" name="ts1" class="form-control" placeholder="Masukkan Universitas">
                            </div>

                            <div class="text-center">
                                <button class="btn btn-warning" name="simpan" type="submit"> Simpan</button>
                            </div>
                        </form>
                        <!-- akhir form -->
                      </div>
                      <div class="card-footer bg-warning">

                      </div>
                  </div>
                <!-- akhir card -->
              </div>
            </div>
            <!-- akhir row -->

            <div class="col-md-20 mx-auto">
            <div class="card mt-5">
                <div class="card-header text-center bg-warning text-light">
                  Riwayat Pendidikan
                  </div>
                  <div class="card-body">
                  <table class="table table-striped table-hover table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>SD</th>
                      <th>SMP</th>
                      <th>SMA</th>
                      <th>S1</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $No=1;
                    $ambildata = mysqli_query($connect,"select * from riwayat_pendidikan");
                    while ($tampil = mysqli_fetch_array($ambildata)) {
                      echo "
                    
                    <tr>
                      <td>$No</td>
                      <td>$tampil[Nama]</td>
                      <td>$tampil[SD]</td>
                      <td>$tampil[SMP]</td>
                      <td>$tampil[SMA]</td>
                      <td>$tampil[S1]</td>
                    </tr>";

                    $No++;
                  }
                  ?>                 
              </table>
                </div>
                <div class ="Card-footer bg-success">
                </div>
                </div>
        <!-- Akhir Card -->
      </div>
      <!--- Akhir Container --->

    </div>
  </section><!-- End Pendidikan Section-->
 

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>