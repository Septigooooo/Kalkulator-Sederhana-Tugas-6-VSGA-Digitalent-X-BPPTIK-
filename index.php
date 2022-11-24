<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
 
class Hitung
{
  private $x;
  private $y;
 
  public function Penjumlahan($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x + $this->y;
    return $hasil;
  }
 
  public function Pengurangan($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x - $this->y;
    return $hasil;
  }
  public function Perkalian($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x * $this->y;
    return $hasil;
  }
 
  public function Pembagian($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;
  }
 
  public function Tampil()
  {
    echo '<div class="kalkulator">';
    echo '<h2 class="judul">KALKULATOR</h2>';
    echo '<form method="POST">';
    echo '<input type="text" name="x" class="bilangan" autocomplete="off" placeholder="Bilangan Pertama">';
    echo ' <input type="text" name="y" class="bilangan" autocomplete="off" placeholder="Bilangan Kedua">';
    echo '<select class="option" name="operasi">
    <option value="Penjumlahan">+</option>
    <option value="Pengurangan">-</option>
    <option value="Perkalian">x</option>
    <option value="Pembagian">/</option>
    </select>';
    echo '<input type="submit" name="hitung" value="Hitung" class="tombol"><br>';
    echo '</form>';
  }
}
 
$data = new Hitung();
$data->Tampil();
 
if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "Penjumlahan") {
    echo "Hasil ".$x." + ".$y." = ".$data->Penjumlahan($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "Perkalian") {
    echo "Hasil ".$x." x ".$y." = ".$data->Perkalian($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "Pengurangan") {
    echo "Hasil ".$x." - ".$y." = ".$data->Pengurangan($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "Pembagian") {
    echo "Hasil ".$x." / ".$y." = ".$data->Pembagian($x, $y)."<br /><br />";
  }
}
?>
</body>
</html>
