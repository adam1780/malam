<?php
//membuat class sepeda
class sepeda{
//membuat properti
private $merk;
private $harga;
//membuat method konstruktor, dimana mengambil parameter merk dan harga dari class sepeda
function __construct($merk,$harga) {
$this->merk=$merk;
$this->harga=$harga;
}
//fungsi getter
//membuat method bacamerk
function Bacamerk(){
return $this->merk;
}
//membuat method bacaharga
function BacaHarga(){
return $this->harga;
}
//function__destruct(){
//echo "Merk dan Harga telah dihapus";
//}
}
//membuat objec sepeda dari kelas sepeda,yang berisi nilai dari parameter konstruktor
$sepeda = new sepeda("Polygon",10000000);
//perintah untuk menampilkan pada browser dimana mengambil dari method Bacamerk dan BacaHarga
echo " merk sepeda = ".$sepeda->Bacamerk()."<br>";
echo " harga sepeda = ".$sepeda->BacaHarga()."<br>";
?>