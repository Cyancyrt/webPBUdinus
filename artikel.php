<?php 
include 'config.php'; 

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<section id="main-Artikel" class="text-center p-5 bg-danger-subtle">
      <h1 class="fw-bold display-4 pb-3">-Artikel-</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        global $conn;
        $sql = "SELECT * FROM artikel";
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
      <div class="container text-center mt-5">
      <button class="btn btn-primary btn-lg rounded-pill shadow" onclick="history.back()">
          <i class="bi bi-arrow-left-circle"></i> Kembali
      </button>
  </div>

    </section>
</body>
</html>