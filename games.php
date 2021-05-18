<?php
  include "logic.php"
  // Ini udah urg tambahin auto update dri database nya
?>
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
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link active" href="games.html">Games</a>
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
                <a class="nav-link" href="input.html">Input</a>
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
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>New Games Everyday</h4>
              <h2>List Of Games</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Isi List Games -->
      <h2 class="jdl-games">Games List</h2>
    <br>

    <?php
      $tampil = mysqli_query($connect,"SELECT * from game order by idGame asc");
      while($data = mysqli_fetch_array($tampil)):
    ?>

    <div class="card w50 card-games">
      <div class="card-body">
        <h2 class="card-title"><?=$data['Judul']?></h5>
        <div class="game-desc">
          <img class="card-img" src="<?=$data['Link_Foto']?>" >             
          <p class="card-text">Developer : <?=$data['Developer']?> </p><br> <!-- Intinya yang $data['namaKolom'] buat ngambil data dari database -->
          <p class="card-text">Publisher : <?=$data['Publisher']?></p><br>
          <p class="card-text">Producers : <?=$data['Producer']?></p><br>
        </div>
        <a href="#" class="btn btn-danger btn-games">Read More --></a>
      </div>
    </div> 

    <?php endwhile; ?>
    <!-- Games 3 -->
    <!-- Akhir List Games -->

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 Project Sistem Database - Game Database </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></scriptzzz
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


  </body>

</html>
