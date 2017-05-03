<?php

  require_once('connection.php');
  $uploud = "uploud/"

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah</title>
  </head>

  <body>
    <form enctype="multipart/form-data" method="post">
      <label>nama</label><input type="text" name="nama"><br>
      <label>photo</label><input type="file" name="image">
      <input type="submit" name="submit">
    </form>
    <?php
      if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $imginfo = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $ext = array('jpeg','jpg','png');
        $userpic = time().'_'.rand(1000,9999).".".$imginfo;


        if (in_array($imginfo,$ext)) {
          ?>
          <script type="text/javascript">
            alert("anda telah menguploud gambar")
          </script>
          <?php
          $query = "INSERT INTO data (nama,photos) VALUES('".$nama."','".$userpic."')";
          $result = mysqli_query($db,$query);
          if ($result) {
            echo "keren";
          }else {
            echo "gagal";
          }
          move_uploaded_file($image_tmp,$uploud.$userpic);
        }else {
          echo "jangan";
        }
      }
     ?>
  </body>
</html>
