<html>
<body>
	<b>Create a new Root Certificate Autdority</b><br/>
	<form action="ssl.php" method="post">
	<input type="hidden" name="create_ca" value="create_ca"/>
	<input type="hidden" name="menuoption" value="create_ca"/>
	<input type="hidden" name="device_type" value="ca_cert"/>
	<input type="hidden" name="name" value="peni"><br>
	
	<table>
	<tr>
		<td>Common Name (eg root-ca.golf.local)</td>
		<td>
			<input type="text" name="cert_dn_commonName" value="ABC Widgets Certificate Autdority" size="40">
		</td>
	</tr>
	<tr>
		<td>Contact Email Address</td>
		<td>
			<input type="text" name="cert_dn_emailAddress" value="cert@abcwidgets.com" size="30">
		</td>
	</tr>
	<tr>
		<td>Organizational Unit Name</td>
		<td>
			<input type="text" name="cert_dn_organizationalUnitName" value="Certification" size="30">
		</td>
	</tr>
	<tr>
		<td>Organization Name</td>
		<td>
			<input type="text" name="cert_dn_organizationName" value="ABC Widgets" size="25">
		</td>
	</tr>
	<tr>
		<td>City</td>
		<td>
			<input type="text" name="cert_dn_localityName" value="Beverly Hills" size="25">
		</td>
	</tr>
	<tr>
		<td>State</td>
		<td>
			<input type="text" name="cert_dn_stateOrProvinceName" value="California" size="25">
		</td>
	</tr>
	<tr>
		<td>Country</td>
		<td>
			<input type="text" name="cert_dn_countryName" value="US" size="2">
		</td>
	</tr>
	<tr>
		<td>Key Size</td>
		<td>
			<input type="radio" name="cert_dn_keySize" value="1024" /> 1024bits 
			<input type="radio" name="cert_dn_keySize" value="2048" /> 2048bits
			<input type="radio" name="cert_dn_keySize" value="4096" checked /> 4096bits
		</td>
	</tr>
	<tr>
		<td>Number of Days</td><td><input type="text" name="cert_dn_days" size="4" value="7300" /></td></tr>
	<tr>
		<td>Certificate Passphrase</td>
		<td>
			<input type="password" name="passphrase"/>
		</td>
	</tr>
	<tr>
		<td><td>
		<input type="submit" value="Create Root CA"/>
	</table>
	</form> 

</body>
</html>