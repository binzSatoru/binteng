<?php
class produk {

    public $namaProduk;
    public $jenisproduk;
    public $jumlshprooduk;
    public $stok;
    public $pembelian;

    public function__construct($namaproduk '', $jenisproduk '',$jumlahproduk = 0, $stok = 0, $pembelian = 0){
        $this->namaproduk = $namaproduk;
        $this->jenisproduk = $jenisprodu;
        $this->jumlahproduk = $jumlahprod;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
    }
    public function $stuKAhirproduk () {
        $jenis->stok = ($this->stok - $this->pembelian)
        return $this->stok;
    }
}

$panggilproduk = new produk ();
$paggilproduk = -> stok = 50;
$panggilproduk -> pembelian = 10;
echo $panggilproduk -> stokAKhirproduk();
