<?php 

/**
* lokasi ada di web2/administrator/model/Berita.php
*/

include_once 'Model.php';
class Pelanggan extends Model
{
	public $nama;
	public $no_telepon;
	public $alamat;
	public $jenis_kelamin;
	public $id_admin;
	
	public function setDataPakaian()
	{
		$query = $this->db->prepare("SELECT * FROM pelanggan");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

	public function setDataPakaian($nama, $no_telepon, $alamat, $jenis_kelamin, $id_admin)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO transaksi(nama, no_telepon, alamat, jenis_kelamin, id_admin) VALUES(:nama, :no_telepon, :alamat, :jenis_kelamin, :id_admin)");
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":no_telepon",$no_telepon);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
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