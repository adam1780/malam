<?php
class sepeda{
private $merk;
private $harga;
function __construct($merk,$harga,$warna,$tipe) {
$this->merk=$merk;
$this->harga=$harga;
$this->warna=$warna;
$this->tipe=$tipe;
}
function Bacamerk(){
return $this->merk;
}
function BacaHarga(){
return $this->harga;
}
function Bacawarna(){
return $this->warna;
}
function Bacatipe(){
return $this->tipe;
}
}
$sepeda = new sepeda("Polygon",1000000,"biru","bmx");
echo " merk sepeda = ".$sepeda->Bacamerk()."<br>";
echo " harga sepeda = ".$sepeda->BacaHarga()."<br>";
echo " warna sepeda = ".$sepeda->Bacawarna()."<br>";
echo " tipe sepeda = ".$sepeda->Bacatipe()."<br>";
?>