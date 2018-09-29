<?php
require 'Logika.php';

if(isset($_POST['angka'])){
  $logik = new Logik();

  echo $logik->perulangan($_POST['angka']);
}
else {
  ?>

<form class="" action="index.php" method="post">
  <input type="number" name="angka" value="">
  <button type="submit" name="button">Tampilkan</button>
</form>

  <?php
}
 ?>
