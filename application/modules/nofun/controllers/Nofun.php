<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nofun extends MX_Controller {

	public function index()
	{
		echo "<h1>This is no fun</h1>";
	}

	public function hello($firstname, $lastname)
	{
		echo "Sveiciens! Kā tev klājas, ".$firstname." ".$lastname."?";
	}



}

/* End of file Nofun.php */
/* Location: ./application/modules/nofun/controllers/Nofun.php */