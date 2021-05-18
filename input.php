
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Game Databases</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
    <?php 
      // include './lib/koneksi.php';
    ?>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Game <em>Databases</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="games.html">Games</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="publisher.html">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="games.html">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="developer.html">Developer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="input.html">Input</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Input New Games Here</h4>
              <h2>Keep us updated</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="input-page about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>New Game Input</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="input-form">
      <form method="POST">
        <div class="form">
          <label>Judul Game</label>
          <input id="inpJudul" type="text" name="judul_game">
        </div>
        <div class="form">
          <label>Kategori</label>
          <input id="inpKategori" type="text" name="kategori">
        </div>
        <div class="form">
          <label>Publisher</label>
          <input id="inpPublisher" type="text" name="publisher">
        </div>
        <div class="form">
          <label>Developer</label>
          <input id="inpDev" type="text" name="developer">
        </div>
        <div class="form">
          <label>Store</label>
          <input id="inpStore" type="text" name="store">
        </div>
        <div class="form">
          <label>Tanggal Rilis</label>
          <input id="inpTgl" type="date" name="tanggal">
        </div>
        <div class="form">
          <label>Platform</label>
          <input id="inpPlaform" type="text" name="platform">
        </div>
        <div class="form">
          <label>Rating</label>
          <input id="inpRating" type="number" name="rating">
        </div>
        <div class="form">
          <label>Sinopsis</label>
          <input id="inpSin" type="text" name="sinopsis">
        </div>
        <div class="form">
          <input type="submit" name="submit" value="SUBMIT" class="btn">
        </div>
      </form>
    </div>

    <section id="--">
      <div class="input-page about-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Edit Database</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="input-form">
        
        <table class="table table-bordered ">
          <tr>
            <th>No</th>
            <th>Judul Game</th>
            <th>Aksi</th>
          </tr>
        <?php 
          $no = 1;
          $tampil = mysqli_query($koneksi,"SELECT * from game order by id_game desc");
          while ($data = mysqli_fetch_array($tampil)):

        ?>
          <tr>
            <td><?=$no++?></td>
            <td><?=$judul_game?></td> <!-- Ini sesuain sama nama kolom di database-->
            <td>
              <a href="#" class="btn btn-warning"> Edit </a>
              <a href="#" class="btn btn-warning"> Hapus </a>
            </td>
          </tr>

        </table>
      </div>
    </section>

      <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<?php
      if(isset($_POST['submit'])){
        $koneksi = mysqli_connect("localhost","root","", "gametab");
        $jg = $_POST['judul_game'];
        $k = $_POST['kategori'];
        $p = $_POST['publisher'];
        $d = $_POST['developer'];
        $s = $_POST['store'];
        $t = $_POST['tanggal'];
        $pl = $_POST['platform'];
        $r = $_POST['rating'];
        $si = $_POST['sinopsis'];

        mysqli_query($koneksi, "INSERT INTO game VALUES ('','$jg','$k','$p','$d','$s','$t','$pl','$r','$si' )");
        // $sql = "INSERT INTO game VALUES (
        //   '','$jg','$k','$p','$d','$s','$t','$pl','$r','$si'
        // );";

        echo $sql;
      }
    ?>
    <?php
      $koneksi = mysqli_connect("localhost","root","", "gametab")
    ?>
  </body>
</html>
