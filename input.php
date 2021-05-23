<?php
  include "logic.php"
?>
<?php
      if(isset($_POST['submit'])){
        if($_GET['hal'] = 'edit'){
          $jg = $_POST['judul_game'];
          $k = $_POST['kategori'];
          $p = $_POST['publisher'];
          $d = $_POST['developer'];
          $s = $_POST['store'];
          $pd = $_POST['produser'];
          $lf = $_POST['foto'];
  
          $edit = mysqli_query($connect, "UPDATE game SET judul='$jg', 
                                            producers = '$pd',
                                            kategori = '$k',
                                            link_foto = '$lf',
                                            id_developer = '$d',
                                            id_publisher = '$p',
                                            id_platform_store = '$s'
                                            WHERE id = '$_GET[id]'
                                            ");
          
          if($edit){
            echo "<script>
                alert('Data berhasil diedit!');
                document.location='input.php';
            </script>";
          }else {
            echo "<script>
                alert('Data gagal diedit!');
                document.location='input.php';
            </script>";
          }
        }
        else 
        {
          $jg = $_POST['judul_game'];
          $k = $_POST['kategori'];
          $p = $_POST['publisher'];
          $d = $_POST['developer'];
          $s = $_POST['store'];
          $pd = $_POST['produser'];
          $lf = $_POST['foto'];
  
          $simpan = mysqli_query($connect, "INSERT INTO game VALUES ('','$jg','$pd','$k','$lf','$d','$p','$s')");
          
          if($simpan){
            echo "<script>
                alert('Data berhasil disimpan!');
                document.location='input.php';
            </script>";
          }else {
            echo "<script>
                alert('Data gagal disimpan!');
                document.location='input.php';
            </script>";
          }
        } 
      }
      if(isset($_GET['hal']))
      {
        if($_GET['hal'] == 'edit')
        {
          $tampil = mysqli_query($connect,"SELECT * FROM game WHERE id = '$_GET[id]'");
          $data = mysqli_fetch_array($tampil);
          if($data){
            $vjudul = $data['judul'];
            $vkategori = $data['kategori'];
            $vpublisher = $data['id_publisher'];
            $vdeveloper = $data['id_developer'];
            $vstore = $data['id_platform_store'];
            $vproduser = $data['producers'];
            $vlink_foto = $data['link_foto'];
          }
        } 
        else if ($_GET['hal'] == 'delete')
        {
          $delete = mysqli_query($connect,"DELETE FROM game WHERE id = '$_GET[id]' ");
          if($delete){
            echo "<script>
            alert('Data berhasil dihapus!');
            document.location='input.php';
        </script>";
          }
        }


      } 
      
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
    <?php 
      // include './lib/koneksi.php';
    ?>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
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
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="games.php">Games</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="publisher.php">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="games.php">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="developer.php">Developer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="input.php">Input</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading input-heading header-text">
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
              <h2>Input / Edit</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="input-form">
      <form method="POST">
        <div class="form">
          <label>Judul Game</label>
          <input id="inpJudul" type="text" value="<?=@$vjudul?>" name="judul_game">
        </div>
        <div class="form">
          <label>Kategori</label>
          <input id="inpKategori" type="text" value="<?=@$vkategori?>" name="kategori">
        </div>
        <div class="form">
          <label>Publisher</label>
          <input id="inpPublisher" type="text" value="<?=@$vpublisher?>" name="publisher">
        </div>
        <div class="form">
          <label>Developer</label>
          <input id="inpDev" type="text" value="<?=@$vdeveloper?>" name="developer">
        </div>
        <div class="form">
          <label>Store</label>
          <input id="inpStore" type="text" value="<?=@$vstore?>" name="store">
        </div>
        <div class="form">
          <label>Produser</label>
          <input id="inpProd" type="text" value="<?=@$vproduser?>" name="produser">
        </div>
        <div class="form">
          <label>Link Foto</label>
          <input id="inpFot" type="text" value="<?=@$vlink_foto?>" name="foto">
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
          $tampil = mysqli_query($connect,"SELECT * from game order by id desc");
          while ($data = mysqli_fetch_array($tampil)):

        ?>
          <tr>
            <td><?=$no++?></td>
            <td><?=$data['judul']?></td> <!-- Ini sesuain sama nama kolom di database-->
            <td>
              <a href="input.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning"> Edit </a>
              <a href="input.php?hal=delete&id=<?=$data['id']?>" onclick="return confirm('Apakah anda yakin ingin menghapus game ini dari database?') "class="btn btn-danger"> Hapus </a>
            </td>
          </tr>
        
        <?php
          endwhile;
        ?>
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
  </body>
</html>
