<?php

class aritmatika {
    protected $angka1;
    private $angka2;
    public $angka3; 

    public function setno1($angka1){
        $this->angka1 = $angka1;
    }
    public function setno2( $angka2){
        $this->angka2 = $angka2;
    }
    public function setno3($angka3){
        $this->angka3 = $angka3;
    }

    public function getno1(){
        return $this->angka1;
    }

    public function getno2(){
        return $this->angka2;
    }

    public function getno3(){
        return $this->angka3;
    }

    public function tambah($angka1 , $angka2 , $angka3){
       return $angka1 +$angka2 +$angka3;
    }

    public function pengurangan ($angka1 , $angka2 , $angka3){
       return $angka1 - $angka2 - $angka3;
    }

    public function perkalian ($angka1 , $angka2 , $angka3){
       return $angka1 * $angka2 * $angka3;
    }

    public function pembagian($angka1 , $angka2 , $angka3){
            return $this->$angka1 / $this->$angka2 / $this->$angka3;
    }
}   

$arit = new aritmatika();
$arit->setno1(10);
$arit->setno2(2);
$arit->setno3(2);


$angka1 = $arit->getno1();
$angka2 = $arit->getno2();
$angka3 = $arit->getno3();


echo "hasil pertambahan = " .$arit->tambah($angka1,$angka2,$angka3); 
echo "<br>";
echo "hasil pengurangan = " .$arit->getno1() - $arit->getno2() - $arit->getno3();
echo "<br>";
echo "hasil perkalian = " .$arit->getno1() * $arit->getno2() * $arit->getno3(); 
echo "<br>";
echo "hasil pembagian = " .$arit->getno1() / $arit->getno2() / $arit->getno3(); 

?>
