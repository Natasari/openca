<?php
	$sql="SELECT commonname, cerificate FROM dn WHERE id_dn =".$param;
	$query=mysql_query($sql);
	$rec=mysql_fetch_assoc($query);
	print_r($rec);

	$myfile = fopen($rec['commonname'].'.cer',"w") or die("Unable to open file!");
	fwrite($myfile, $rec['cerificate']);
	fclose($myfile);

	$file = $rec['commonname'].'.cer';

	if (file_exists($file)) 
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		readfile($file);
		exit;
	}

	header('location:?request=dashboard');
?>