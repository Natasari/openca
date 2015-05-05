<html>
<body>
<p>
<b>Download a Certificate</b><br/>
<form action="index.php" method="post">
<input type="hidden" name="menuoption" value="download_cert">
<table  style="width: 400px;">

<tr><th>Rename Extension</th><td><input type="radio" name="rename_ext" value="FALSE" checked />Do not Rename<br><input type="radio" name="rename_ext" value="cer" /> Rename to cer<br><input type="radio" name="rename_ext" value="pfx" /> Rename to pfx<br></td></tr>
<?PHP
/*

<input type="radio" name="cer_ext" value="FALSE" checked /> No <input type="radio" name="cer_ext" value="CER" /> Yes</td></tr>
<tr><th>Rename Extension to .pfx</th><td><input type="radio" name="pfx_ext" value="FALSE" checked /> No <input type="radio" name="cer_ext" value="PFX" /> Yes</td></tr>
*/
?>
<tr><td width=100>Name:<td><select name="cert_name" rows="6">
<option value="">--- Select a certificate
<?
print "<option value=\"zzTHISzzCAzz\">This CA Certificate</option>\n";
$dh = opendir($config['cert_path']) or die('Unable to open ' . $config['cert_path']);
while (($file = readdir($dh)) !== false) {
	if ( ($file !== ".htaccess") && is_file($config['cert_path'].$file) )  {
		$name = base64_decode(substr($file, 0,strrpos($file,'.')));
		$ext = substr($file, strrpos($file,'.'));
		print "<option value=\"$name$ext\">$name$ext</option>\n";
	}
}
?>
</select></td></tr>
<tr><td><td><input type="submit" value="Download Certificate">
</table>
</form>
</p>
------------------------------------------------------------------------------------
<p>
<b>Convert a Certificate to PKCS#12</b><br/>
<?
//Convert an existing certificate to PKCS#12 format, however, you can only do this if you have a private keyfile used to generate the CSR with.
$valid_files=0;
$dh = opendir($config['cert_path']) or die('Unable to open cert path');
while (($file = readdir($dh)) !== false) {
	if ( ($file !== ".htaccess") && is_file($config['cert_path'].$file)  && (substr($file, strrpos($file,'.')) != '.p12') && !is_file($config['cert_path'].substr($file, 0,strrpos($file,'.')).'.p12') )  {
	  if (is_file($config['key_path'].$file) ) {
	    $valid_files++;
	  }
	}
}
closedir($dh);

if ($valid_files) {
?>
<form action="index.php?menuoption=download_cert" method="post">
<input type="hidden" name="menuoption" value="convert_cert_pkcs12">
<table  style="width: 400px;">
<tr><td width=100>Private Key Passphrase:<td><input type="password" name="pkey_pass"/>
<tr><td width=100>PKCS#12 Passphrase:<td><input type="password" name="pkcs12_pass"/>
<tr><td width=100>Name:<td><select name="cert_name" rows="6">
<option value="">--- Select a certificate
<?
$dh = opendir($config['cert_path']) or die('Unable to open cert path');
while (($file = readdir($dh)) !== false) {
	if ( ($file !== ".htaccess") && is_file($config['cert_path'].$file)  && (substr($file, strrpos($file,'.')) != '.p12') && !is_file($config['cert_path'].substr($file, 0,strrpos($file,'.')).'.p12') )  {
	  if (is_file($config['key_path'].$file)  ) {
		$name = base64_decode(substr($file, 0,strrpos($file,'.')));
		$ext = substr($file, strrpos($file,'.'));
		print "<option value=\"$name$ext\">$name$ext</option>\n";
	  }
	}
}
closedir($dh);
?>
</select></td></tr>
<tr><td><td><input type="submit" value="Convert Certificate">
</table>
</form>
<?
}
else 
  print "<b> No Valid Certificates are available to convert.</b>\n";
?>
</p>


print "<b>Download PKCS#12 Certificate:</b>\n<br>\n<br>\n";

?>
<form action="index.php" method="post">
<input type="hidden" name="menuoption" value="download_cert">
<input type="hidden" name="cert_name" value="<?PHP print $this_filename.'.p12';?>">
<input type="submit" value="Download PKCS#12 Certificate">
</form>
<BR><BR>


<p>
<b>Import a CSR</b><br/>
<form action="index.php" method="post">
<input type="hidden" name="menuoption" value="import_CSR"/>
<table  style="width: 400px;">
<tr><td colspan=2>Request:<br/>
<textarea name="request" cols="60" rows="6"></textarea><br/>
<tr><td><td><input type="submit" value="Import CSR"/>
</table>
</form>
</p>


<p>
<b>Upload a CSR</b><br/>
<form enctype="multipart/form-data" action="index.php" method="POST">
<input type="hidden" name="menuoption" value="upload_CSR"/>
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<table  style="width: 400px;">
<tr><th>Choose a CSR to upload: </th></tr>
<tr><td><input name="uploadedfile" type="file" id="uploaded_csr" />
<tr><td><input type="submit" value="Upload CSR" />
</table>
</form>
</p>

</body>
</html>

