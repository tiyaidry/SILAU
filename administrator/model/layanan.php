 ?>
 <?php 

include_once 'model.php';
class layanan extends model
{
	public $kode_layanan;
	public $nama_layanan;
	public $harga;
	
	public function getAllDataLayanan()
	{
		$query = $this->db->prepare("SELECT * FROM layanan");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

	public function setDataLayanan()
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO layanan");
		   $stmt->bindparam(":tanggal",$tanggal);
		   $stmt->bindparam(":judul",$judul);
		   $stmt->bindparam(":isi",$isi);
		   $stmt->bindparam(":id_kategori",$id_kategori);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	public function hapusDataLayanan($id)
	{
		try 
		{
			$stmt = $this->db->prepare("SELECT * FROM layanan WHERE id_layanan=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
		catch(PDOException $e) 
		{
		echo $e->getMessage(); 
		return false;
		}
	}
	public function editDataLayanan()
	{
		$query = $this->db->prepare("SELECT * FROM layanan");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

}

 ?>