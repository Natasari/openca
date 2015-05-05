<?php

function check_errors() {
  echo "<hr/><pre>";
  $Count = 0;
  while (($e=openssl_error_string())!==false) {
    echo $e."<br><br>";
    $Count++;
  }
  if ($Count==0)
    echo "No error";
  echo "</pre><hr/>";
}


$arr = array(
    "countryName" => "UK",
    "stateOrProvinceName" => "Somerset",
    "localityName" => "Glastonbury",
    "organizationName" => "The Brain Room Limited",
    "organizationalUnitName" => "PHP Documentation Team",
    "commonName" => "Wez Furlong",
    "emailAddress" => "wez@example.com"
);

$my_passphrase = "peni";
$my_keyBit = 1024;

print "<h2>Creating Certificate Key</h2>";
print "PASSWORD:".$my_passphrase."<BR>";
print "KEY BIT:".$my_keyBit."<BR>";

$config = array(
    "digest_alg" => "md5",
    "private_key_bits" => (int) $my_keyBit,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
    "encrypt_key_cipher" => OPENSSL_CIPHER_3DES,
);


// Generate a new private (and public) key pair
$res = openssl_pkey_new($config) or die('Fatal: Error creating Certificate Key');
openssl_pkey_export($res, $privKey);
$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];

print "private key:".$privKey."<br>";
print "public key :".$pubKey."<br> <br>";


//Generate a certificate signing request
$csr = openssl_csr_new($arr, $privKey);

//This creates a self-signed cert that is valid for 365 days
$sscert = openssl_csr_sign($csr, null, $privKey, 365);
openssl_x509_export_to_file($sscert, 'example.cer');


openssl_csr_export($csr, $csrout) and var_dump($csrout);
print "<br><br>";
openssl_x509_export($sscert, $certout) and var_dump($certout);

print "<br><br> PKEY------------------<br>";
openssl_pkey_export($privKey, $pkeyout, $my_passphrase) and var_dump($pkeyout);

?>