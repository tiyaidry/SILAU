<?php 

/**
* lokasi ada di web2/administrator/model/Berita.php
*/

include_once 'Model.php';
class Transaksi extends Model
{
	public $kode_transaksi;
	public $tanggal_transaksi;
	public $tanggal_ambil;
	public $berat_laundry;
	public $id_admin;
	
	public function setDataPakaian()
	{
		$query = $this->db->prepare("SELECT * FROM transaksi");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

	public function setDataPakaian($kode_transaksi, $tanggal_transaksi, $tanggal_ambil, $berat_laundry, $id_admin)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO transaksi(kode_transaksi, tanggal_transaksi, tanggal_ambil, berat_laundry, id_admin) VALUES(:kode_transaksi, :tanggal_transaksi, :tanggal_ambil, :berat_laundry, :id_admin)");
		   $stmt->bindparam(":kode_transaksi",$kode_transaksi);
		   $stmt->bindparam(":tanggal_transaksi",$tanggal_transaksi);
		   $stmt->bindparam(":tanggal_ambil",$tanggal_ambil);
		   $stmt->bindparam(":berat_laundry",$berat_laundry);
		   $stmt->bindparam(":id_admin",$id_admin);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
}

 ?>