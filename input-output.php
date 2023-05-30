<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kalkulator">
    <h1 class="judul">Program Kalkulator Sederhana</h1>
    <form action="" method="post">
        <input type="number" name="x" size="3" class="bil" placeholder="Input bilangan 1">
        <select class="operasi" name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select>
        <input type="number" name="y" size="3" class="bil" placeholder="Input bilangan 2">
        <input type="submit" value="Hitung" name="hitung" class="tombol">
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST["hitung"])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $operasi = $_POST['operasi'];
    $calculator1 = new kalkulator();

    switch ($operasi) {
        case 'tambah':
            echo "Hasil dari ".$x."+".$y." = " .$calculator1->setPertambahan($x,$y). "<br/>";
            break;
        case 'kurang':
            echo "Hasil dari ".$x."-".$y." = " .$calculator1->setPengurangan($x,$y). "<br/> <br/>";
            break;
        case 'kali':
            echo "Hasil dari ".$x."x".$y." = " .$calculator1->setPerkalian($x,$y). "<br/> <br/>";
            break;
        case 'bagi':
            echo "Hasil dari ".$x.":".$y." = " .$calculator1->setPembagian($x,$y). "<br/> <br/>";
            break;
        default:
            break;
    }
}
?>