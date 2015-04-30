<?php
$profile=array(
	"countryName" => "IDN",
	"stateOrProvinceName" => "Jatim",
	"localityName" => "Glastonbury",
	"organizationName" => "KIJ",
	"organizationalUnitName" => "PHP Documentation Team",
	"commonName" => "Peni"
	"emailAddress" => "penitasari93@gmail.com"
);

$privateKey = openssl_pkey_new();

$csr = openssl_csr_new($profile, $privateKey);

$sscert = openssl_csr_sign($csr, null, $privateKey, 365);

openssl_csr_export($csr, $csrout) and var_dump($csrout);
openssl_x509_export($sscert, $certout) and var_dump($certout);
openssl_pkey_export($privateKey, $pkeyout, "mypassword") and var_dump($pkeyout);

while(($e= openssl_error_string()) ! == false){
	echo $e . "\n"
}

?>
