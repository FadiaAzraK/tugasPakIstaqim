<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <form method="post" action="">
        <label for="">Nama depan:</label><br>
        <input type="text" name="depan" id=""><br>
        <label for="">Nama tengah:</label><br>
        <input type="text" name="tengah" id=""><br>
        <label for="">Nama belakang:</label><br>
        <input type="text" name="belakang" id=""><br>
        <input type="submit" value="simpan" name="btsimpan">
    </form>
</body>
</html>

<?php
    class biodata{
        public $data;

        public function inputData($data){
            $this->data = $data;
            if ($this->data !="") {
                return $data;
            }else{
                return "Data butuh diisi!";
            }
        }
    }

    $data1 = new biodata();
    if (isset($_POST['btsimpan'])) {
        echo "Nama depan: ".$data1->inputData($_POST['depan'])."<br>";
        echo "Nama tengah: ".$data1->inputData($_POST['tengah'])."<br>";
        echo "Nama belakang: ".$data1->inputData($_POST['belakang'])."<br>";
        echo "Jadi nama lengkap anda adalah ".$data1->inputData($_POST['depan']);
        echo $data1->inputData($_POST['tengah']);
        echo $data1->inputData($_POST['belakang']);
    }

?>