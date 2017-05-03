<?php

require_once('connection.php');
$uploud = "uploud/"

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>uploud</title>

    <style media="screen">
      img{
        width: 50px;;
        height: 50px;
      }
      form{
        width: auto;
        height: auto;
      }
    </style>
  </head>
  <body>
    <h1>......</h1>

    <button type="button" name="button"><a href="tambah.php">Tambah</a></button>

    <?php
      $query = "SELECT * FROM data";
      $result = mysqli_query($db,$query);

      while ($row = mysqli_fetch_assoc($result)) {
        ?>


    <table border="1">
      <thead>
        <tr>
          <th>nama</th>
          <th>photo</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $row['nama'] ?></td>
          <td><img src="<?php echo $uploud.$row['photos']; ?>" alt=""></td>
          <td>edit hapus</td>
        </tr>
      </tbody>
    </table>
  <?php
    }
  ?>
  </body>
</html>
