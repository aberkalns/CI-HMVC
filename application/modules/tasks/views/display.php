<h1>Tas ir veicamo darbu saraksts</h1>
<?php
	foreach ($query->result() as $row) {
		echo "<h2>".$row->title."</h2>";
	}
?>