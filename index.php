<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supercell</title>
    <link rel="icon" href="sc.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


<!--nav begin-->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href=""><img src="logo.png" alt="" width="10%">Supercell</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                <!-- Search -->
                <li class="nav-item">
                    <input type="text" id="searchInput" placeholder="Search articles..." onkeyup="searchArticles()" class="form-control me-2" style="width: 200px;">
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedule">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutme">AboutMe</a>
                </li>
            </ul>
            <button id="darkmode" class="btn btn-outline-light"><i class="bi bi-cloud-sun-fill h2 p-2 text-dark"></i></button>
            <button id="lightmode" class="btn btn-outline-light"><i class="bi bi-cloud-sun h2 p-2 text-dark"></i></button>
        </div>
    </div>
</nav>
    
    <!--nav end-->

    <!--hero begin-->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start" >
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="sc2.png" class="img-fluid" width="500">
                <div>
                    <h1 class="fw-bold display-4">Supercell</h1>
                    <h4 class="lead display-6">Supercell adalah pengembang game mobile asal Finlandia yang terkenal di seluruh dunia karena menciptakan game-game berkualitas tinggi yang sangat sukses. Didirikan pada tahun 2010 dan berbasis di Helsinki, Finlandia, Supercell dikenal dengan pendekatan mereka yang unik dalam pengembangan game.
                    </h4><br>
                    <h6>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!--hero end-->

    <!--article begin-->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->


    <section id="gallery" class="text-center p-5 bg-white-subtle">
        <div class="container">
            <h1 class="fw-bold display pb-3">gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="zidan1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="zidan2" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="zidan3.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="zidan4.jpg" class="d-block w-100" alt="...">
                  </div>
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

              <section id="schedule" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3 pt-5">Jadwal Kuliah Dan Kegiatan Mahasiswa</h1>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-4">
      
            <div class="col mb-4">
              <div class="card bg-primary text-dark">
                <div class="card-header">Senin</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    09:00 - 10:30
                    <p>Basis Data</p>
                    <p>Ruang H.3.4</p>
                  </li>
                  <li class="list-group-item">
                    13:00-15:00
                    <p>Dasar Pemrograman</p>
                    <p>Ruang H.3.1</p>
                  </li>
                </ul>
              </div>
            </div>
      
            <div class="col mb-4">
              <div class="card bg-success text-dark">
                <div class="card-header">Selasa</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    08:00 - 09:30
                    <p>Pemrograman Berbasis Web</p>
                    <p>Ruang D.2.J</p>
                  </li>
                  <li class="list-group-item">
                    14:00 - 16:00
                    <p>Basis Data</p>
                    <p>Ruang D.3.M</p>
                  </li>
                </ul>
              </div>
            </div>
      
            <div class="col mb-4">
              <div class="card bg-danger text-dark">
                <div class="card-header">Rabu</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    10:00 - 12:00
                    <p>Pemrograman Berbasis Object</p>
                    <p>Ruang D.2.A</p>
                  </li>
                  <li class="list-group-item">
                    13:30 - 15:00
                    <p>Pemrograman Sisi Server</p>
                    <p>Ruang D.2.A</p>
                  </li>
                </ul>
              </div>
            </div>
      
            <div class="col mb-4">
              <div class="card bg-warning text-dark">
                <div class="card-header">Kamis</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    08:00 - 10:00
                    <p>Pengantar Teknologi Informasi</p>
                    <p>Ruang D.3.N</p>
                  </li>
                  <li class="list-group-item">
                    11:00 - 13:00
                    <p>Rapat Koordinasi DOSCOM</p>
                    <p>Ruang Rapat G.1</p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card bg-info text-dark">
                <div class="card-header">Jumat</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    09:00 - 11:00
                    <p>Data Mining</p>
                    <p>Ruang G.2.3</p>
                  </li>
                  <li class="list-group-item">
                    13:00 - 15:00
                    <p>Information Retrieval</p>
                    <p>Ruang G.2.A</p>
                  </li>
                </ul>
              </div>
            </div>
  
            <div class="col mb-4">
              <div class="card bg-light text-dark">
                <div class="card-header">sabtu</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    08:00 - 10:00
                    <p>Bimbingan Karier</p>
                    <p>Online</p>
                  </li>
                  <li class="list-group-item">
                    10:30 - 12:00
                    <p>Bimbingan Skripsi</p>
                    <p>Online</p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col mb-4 ">
              <div class="card bg-black text-white">
                <div class="card-header">Minggu</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Tidak Ada Jadwal</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

            <section id="aboutme" class="text-center text-md-start p-5 bg-danger-subtle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="" alt="Your Photo" class="img-fluid rounded-circle" width="200" border-radius="40%">
                        </div>
                        <div class="col-md-8">
                            <h2>Muhammad Surya Ramdhan</h2>
                            <h6>Mahasiswa Teknik Informatika</h6>
                            <P>NIM : A11.2023.14901</P>
                            <p>Program Studi : Teknik Informatika</p>
                            <p>Email : surya10@gmail.com</p>
                            <p>Telepon : +62 8224 3203 235</p>
                            <p>Alamat : Jl.Teri rt03/rw/01, Kudus</p>
                        </div>
                    </div>
                </div>
            </section>


    <footer class="text-center p-5">
        <div>
            <a href="hhttps://www.instagram.com/"><i class="bi bi-instagram h2 p-2 text-grey"></i></a>
            <a href="https://x.com/home?lang=en-id"><i class="bi bi-twitter-x h2 p-2 text-grey"></i></a>
            <a href="https://www.youtube.com/youtube"><i class="bi bi-youtube h2 p-2 text-grey"></i></a>
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="bi bi-facebook h2 p-2 text-grey"></i></a>
        </div> <br>
        <div>Copyright - Muhammad Surya Ramadhan &copy; 2024</div>
        
    </footer>


    <script>
        function searchArticles() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const cards = document.querySelectorAll('.card');
        
            cards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase();
                if (title.includes(filter)) {
                    card.style.display = ""; // Show card
                } else {
                    card.style.display = "none"; // Hide card
                }
            });
        }
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <script type="text/javascript">
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML = 
            waktu.getHours() + 
            ":" +
            waktu.getMinutes() +
            ":" +
            waktu.getSeconds();
        }

    //mengganti dark mode
    document.getElementById("darkmode").onclick = function () {
        document.body.classList.add("bg-secondary", "text-light"); //add kelas mode gelap
        document.body.classList.remove("bg-white", "text-dark"); //hapus kelas mode terang

        const heroSection = document.getElementById("hero");
        heroSection.classList.add("bg-dark", "text-light"); //add hero section gelap
        heroSection.classList.remove("bg-danger-subtle", "text-dark"); //hapus hero terang

        const gallerySection = document.getElementById("gallery");
        gallerySection.classList.add("bg-dark", "text-light"); //add gallery gelap
        gallerySection.classList.remove("bg-danger-subtle", "text-dark"); //hapus gallery terang

        const aboutmeSection = document.getElementById("aboutme");
        aboutmeSection.classList.add("bg-dark", "text-light"); //add gallery gelap
        aboutmeSection.classList.remove("bg-danger-subtle", "text-dark");

        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.style.backgroundColor = "black";
            card.style.color = "white";
        });  
    };

    //mengganti light mode 
    document.getElementById("lightmode").onclick = function () {
        document.body.classList.remove("bg-secondary", "text-light"); //hapus kelas mode gelap
        document.body.classList.add("bg-white", "text-dark"); //add kelas mode terang

        const heroSection = document.getElementById("hero");
        heroSection.classList.remove("bg-dark", "text-light"); // hapus hero section gelap
        heroSection.classList.add("bg-danger-subtle", "text-dark"); //add khero terang

        const gallerySection = document.getElementById("gallery");
        gallerySection.classList.remove("bg-dark", "text-light"); //hapus gallery gelap
        gallerySection.classList.add("bg-danger-subtle", "text-dark"); //add gallery terang

        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.style.backgroundColor = "white";
            card.style.color = "black";
        });
    };

    </script>
    
</body>
</html>

