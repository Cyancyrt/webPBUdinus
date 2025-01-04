<?php
include 'config.php';

// kode index.php lainnya
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#main-Artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profil">Profile</a>
            </li>
      </div>
    </nav>
    <!-- hero -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center gap-5">
          <img class="img-fluid w-50" src="jk.jpeg" alt="juujika_no_rokunin">
          <div class="">
            <h1 class="fw-bold display-4">Create Traumatical Memories, Going Crazy, Every morning</h1>
            <h4 class="lead display-6">mencatat penyesalan dan semua pikiran negatif</h4>
          </div>
        </div>
      </div>
    </section>
    
    <!-- konten -->
    <section id="main-Artikel" class="text-center p-5 bg-danger-subtle">
      <h1 class="fw-bold display-4 pb-3">-Artikel-</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        global $conn;
        $sql = "SELECT * FROM artikel LIMIT 4";
        $hasil1 = $conn->query($sql);
        //menghitung jumlah baris data article
        $jumlah_article = $hasil1->num_rows;
        if($hasil1->num_rows > 0){

        while($row = $hasil1->fetch_assoc()){
          
        ?>
        <div class="col">
          <div class="card h-100 justify-content-center">
            <img src="gambar/<?= $row['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $row['judul']; ?></h5>
              <p class="card-text"><?= $row['excerpt']; ?></p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      
        <?php }} ?>

      </div>
    
      <div class="lainnya">
        <a href="artikel.php" class="btn btn-sm btn-outline-primary mt-3">lainnya...</a>
      </div>
    </section>

    <aside id="galeri" class="text-center p-5">
      <header><h1 style="text-align: center">-Galeri-</h1></header>
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://wallpapercave.com/wp/wp11215563.jpg" class="d-block w-50 mx-auto my-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://wallpapercave.com/wp/wp11215450.jpg" class="d-block w-50 mx-auto my-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://wallpapercave.com/wp/wp11215575.jpg" class="d-block w-50 mx-auto my-auto" alt="...">
          </div>
          <?php
          global $conn;
          $sql = "SELECT * FROM galeri";
          $hasil1 = $conn->query($sql);
          while($row = $hasil1->fetch_assoc()){
            
          
          ?>
          <div class="carousel-item">
            <img src="gambar/<?= $row['URL']; ?>" class="d-block w-50 mx-auto my-auto" alt="...">
          </div>
          <?php }  ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </aside>
    <section id="schedule" class="py-5">
      <div class="container">
          <h2 class="text-center font-weight-bold mb-4">Jadwal Kuliah & Kegiatan Mahasiswa</h2>
          <div class="row justify-content-center">
              <!-- Box untuk Senin -->

                 <div class="col-md-3 col-12 mb-4 text-center">
                   <div class="card">
                     <div class="card-header text-center font-weight-bold bg-primary text-white">
                       Senin
                      </div>
                      <div class="card-body">
                        <div class="mb-2">
                          <div class="card border-info">
                            <div class="card-body">
                              <p class="card-text"> <b>09:00 - 10:30 </b> <br> Basis Data <br> Ruang H.3.4</p>
                            </div>
                          </div>
                          </div>
                          <div class="mb-2">
                            <div class="card border-info">
                              <div class="card-body">
                                <p class="card-text"><b>13:00 - 15:00 </b> <br> Dasar Pemrograman <br> Ruang H.3.1</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
  
              <!-- Box untuk Selasa -->
              <div class="col-md-3 col-12 mb-4 text-center">
                <div class="card">
                      <div class="card-header text-center font-weight-bold bg-success text-white">
                        Selasa
                      </div>
                      <div class="card-body">
                        <div class="mb-2">
                          <div class="card border-success">
                                  <div class="card-body">
                                      <p class="card-text"><b>08:00 - 09:30 </b> <br> Pemrograman Berbasis Web <br> Ruang D.2.j</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-2">
                                  <div class="card border-success">
                                    <div class="card-body">
                                      <p class="card-text"><b>13:40 - 15:00 </b> <br> Basis Data <br> Ruang D.2.M</p>
                                    </div>
                              </div>
                          </div>
                      </div>
                    </div>
              </div>
              
              <!-- Box untuk Rabu -->
              <div class="col-md-3 col-12 mb-4 text-center">
                <div class="card">
                      <div class="card-header text-center font-weight-bold bg-warning text-white">
                          Rabu
                      </div>
                      <div class="card-body">
                        <div class="mb-2">
                          <div class="card border-warning">
                            <div class="card-body">
                              <p class="card-text"><b>10:00 - 12:00</b> <br> Pemrograman Berbasis Object <br> Ruang D.2.A</p>
                            </div>
                          </div>
                        </div>
                        <div class="mb-2">
                          <div class="card border-warning">
                                  <div class="card-body">
                                      <p class="card-text"><b>13:30 - 15:00 </b> <br> Pemrograman Sisi Server <br> Ruang D.2.A</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <!-- Box untuk Kamis -->
                          <div class="col-md-3 col-12 mb-4 text-center">
                  <div class="card">
                    <div class="card-header text-center font-weight-bold bg-danger text-white">
                          Kamis
                      </div>
                      <div class="card-body">
                        <div class="mb-2">
                          <div class="card border-danger">
                            <div class="card-body">
                              <p class="card-text"><b>08:00 - 10:00</b> <br> Pengantar Teknologi Informasi <br> Ruang D.3.N</p>
                            </div>
                          </div>
                          </div>
                          <div class="mb-2">
                              <div class="card border-danger">
                                <div class="card-body">
                                  <p class="card-text"><b>11:00 - 13:00</b> <br> Rapat Koordinasi DOSCOM <br> Ruang rapat G.1</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
              </div>
  
              <!-- Box untuk Jumat -->
              <div class="col-md-3 col-12 mb-4 text-center">
                <div class="card">
                      <div class="card-header text-center font-weight-bold bg-info text-white">
                        Jumat
                      </div>
                      <div class="card-body">
                        <div class="mb-2">
                            <div class="card border-info">
                              <div class="card-body">
                                <p class="card-text"><b>09:00 - 10:30 </b> <br> Dasar Pemrograman <br> Ruang G.2.3</p>
                              </div>
                            </div>
                          </div>
                        <div class="mb-2">
                          <div class="card border-info">
                            <div class="card-body">
                              <p class="card-text"><b>13:00 - 15:00 </b> <br> Information Retrival <br> Ruang G.2.4</p>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Box untuk Sabtu -->
                    <div class="col-md-3 col-12 mb-4 text-center">
                  <div class="card">
                      <div class="card-header text-center font-weight-bold bg-secondary text-white">
                          Sabtu
                        </div>
                        <div class="card-body">
                          <div class="mb-2">
                            <div class="card border-secondary">
                              <div class="card-body">
                                <p class="card-text"><b>08.00 - 10.00</b> <br>Bimbingan Karier <br> Online</p>
                              </div>
                            </div>
                          </div>
                          <div class="mb-2">
                              <div class="card border-secondary">
                                  <div class="card-body">
                                    <p class="card-text"><b>10.30 - 12.00</b> <br>Bimbingan Skripsi <br> Online</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
  
              <!-- Box untuk Minggu -->
            <div class="col-md-3 col-12 mb-4 text-center">
                  <div class="card">
                    <div class="card-header text-center font-weight-bold bg-dark text-white">
                      Minggu
                    </div>
                    <div class="card-body">
                      <div class="mb-2">
                        <div class="card border-dark">
                          <div class="card-body">
                            <p class="card-text">Tidak Ada Jadwal</p>
                          </div>
                        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
      </section>
      <section id="profil" class="py-5">
        <div class="container">
      <!-- Keterangan Halaman -->
      <h2 class="text-center font-weight-bold mb-4">Profil Mahasiswa</h2>
      
      <div class="row justify-content-center">
        <!-- Foto Mahasiswa -->
        <div class="col-md-6 text-center d-flex align-items-center">
          <div
            class="justify-content-center align-items-center shadow-lg align-items-center border border-black border-opacity-50 rounded-circle overflow-hidden mb-4"
            style="width: 300px; height: 300px; margin: 0 auto"
          >
            <img src="gambar/Danendra Altaf.png" alt="Foto Mahasiswa" class="img-fluid" />
          </div>
        </div>

        <!-- Biodata Mahasiswa -->
        <div class="col-md-6">
          <div class="card shadow-sm p-4">
            <h4 class="font-weight-bold">Biodata</h4>
            <ul class="list-unstyled">
              <table class="table">
                  <tr>
                      <th>
                          Nama: 
                      </th>
                      <td>Danendra Althaf</td>
                  </tr>
                  <tr>
                      <th>
                          Fakultas: 
                      </th>
                      <td>
                          Teknik Informatika
                      </td>
                  </tr>
                  <tr>
                      <th>
                          Universitas: 
                      </th>
                      <td>
                          XYZ University
                      </td>
                  </tr>
                  <tr>
                      <th>
                          Prodi:
                      </th>
                      <td>
                          S1 Teknik Informatika
                      </td>
                  </tr>
                  <tr>
                      <th>
                          Email:
                      </th>
                      <td>
                          danendra@example.com
                      </td>
                  </tr>
                  <tr>
                      <th>
                          Alamat: 
                      </th>
                      <td>
                          Jalan Raya No. 124, Kendal  
                      
                      </td>
                  </tr>
                  <tr>
                      <th>
                          Nomor Telepon: 
                      </th>
                      <td>
                          0812-2354-5450                        
                      </td>
                  </tr>
              </table>
            </ul>
          </div>
        </div>
    </div>
  </section>
    <footer class="text-center p-5">
      <i class="bi bi-whatsapp h2 p-2 text-dark"></i>
      <i class="bi bi-twitter-x h2 p-2 text-dark"></i>
      <i class="bi bi-instagram h2 p-2 text-dark"></i>
      <div class="date">
        Danendra a.k.a <b class="text-primary">Cyret</b> 2024
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
