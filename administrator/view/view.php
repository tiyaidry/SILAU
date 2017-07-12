<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'templatelayanan/navigasi.php';
		include_once 'templatelayanan/header.php';
		include_once 'templatelayanan/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'templatelayanan/footer.php';
	}
	
}


 ?>