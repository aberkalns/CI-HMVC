<h1>Tas ir veicamo darbu saraksts</h1>
<?php
	foreach ($query->result() as $row) {
		echo "<h2>".$row->title."</h2>";
	}

	$firstname = "Ansis";
	$lastname = "Martinsons";

	echo "<hr>";

	$this->load->module('nofun');
	$this->nofun->hello($firstname, $lastname);

	echo "<hr>";
	echo Modules::run('nofun/hello', $firstname, $lastname)

?>