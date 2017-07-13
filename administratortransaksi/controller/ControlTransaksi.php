<?php 
/**
* 
*/
include_once 'Controller.php';

class ControlTransaksi extends Controller
{
	
	public function cariDataPelanggan()
	{
		include_once 'model/Kategori.php';
		$kat  = new Kategori();
		$daftar_kategori = $kat->setPelanggan(id);

		return $daftar_kategori;
	}

	public function tambahPelanggan()
	{
		include_once 'model/Berita.php';
		$mberita = new Berita();
		$tanggal = date('Y-m-d');
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$id_kategori = $_POST['kategori'];
		$pesan = $mberita->setBerita($tanggal,$judul,$isi,$id_kategori);

		return $pesan;
	}
	public function inputDataPakaian()
	{

	}
}


 ?>