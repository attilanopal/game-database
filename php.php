<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="assets/css/owl.css">

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
      }
    ?>