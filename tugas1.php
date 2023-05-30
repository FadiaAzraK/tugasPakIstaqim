<?php
class Calculator {
    public $x;
    private $y;
    protected $result;
    
    public function setAngka($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function tambah() {
        $this->result = $this->x + $this->y;
    }
    
    public function kurang() {
        $this->result = $this->x - $this->y;
    }
    
    public function kali() {
        $this->result = $this->x * $this->y;
    }
    
    public function bagi() {
        if ($this->y != 0) {
            $result = $this->x / $this->y;
            return $result;
        } else {
            return"Error: Cannot divide by zero! ";
        }
    }
    
    public function getResult() {
        // echo "Hasil dari ".$this->x ."+". $this->y." = ". $this->tambah(). "<br>";
        // echo "Hasil dari ".$this->x ."-". $this->y." = ". $this->kurang(). "<br>";
        // echo "Hasil dari ".$this->x ."*". $this->y." = ". $this->kali(). "<br>";
        // echo "Hasil dari ".$this->x ."/". $this->y." = ". $this->bagi(). "<br>";
        return $this->result;
    }
}


// $calculator1 = new Calculator();
// $calculator1->setAngka(100, 2);
// $calculator1->tambah();
// $calculator1->kurang();
// $calculator1->kali();
// $calculator1->bagi();
// $calculator1->getResult() ;

$calculator1 = new Calculator();

$calculator1->setAngka(5, 3);
$calculator1->tambah();
echo "Pertambahan: " . $calculator1->getResult() . "<br>";

$calculator1->setAngka(10, 4);
$calculator1->kurang();
echo "Pengurangan: " . $calculator1->getResult() . "<br>";

$calculator1->setAngka(6, 2);
$calculator1->kali();
echo "Perkalian: " . $calculator1->getResult() . "<br>";

$calculator1->setAngka(2, 0);
$calculator1->bagi();
echo "Pembagian: " . $calculator1->getResult() . "<br>";

