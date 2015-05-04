<?php 
$arr = $_POST["cert_dn"];
$my_passphrase = $_POST["passphrase"];
$my_keyBit = $arr['keySize'];

print "<h2>Creating Certificate Key</h2>";
print "PASSWORD:".$my_passphrase."<BR>";
print "KEY BIT:".$my_keyBit."<BR>";

$config = array(
    "digest_alg" => "md5",
    "private_key_bits" => (int) $my_keyBit,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);


/*generate key with pkey_new(), dont know what methode to use md5 or how many bit 
$res = openssl_pkey_new();
openssl_pkey_export($res, $privKey);
print "private key:".$privKey."<BR>";
*/

// Generate a new private (and public) key pair
$res = openssl_pkey_new($config) or die('Fatal: Error creating Certificate Key');
openssl_pkey_export($res, $privKey);
$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];

print "private key:".$privKey."<br>";
print "public key :".$pubKey."<br> <br>";

/* checking public and private key work
$data = "plaintext data goes here";
Encrypt the data to $encrypted using the public key
openssl_public_encrypt($data, $encrypted, $pubKey);
Decrypt the data using the private key and store the results in $decrypted
openssl_private_decrypt($encrypted, $decrypted, $privKey);
echo $decrypted;
*/

/* example of dn
$dn = array(
    "countryName" => "UK",
    "stateOrProvinceName" => "Somerset",
    "localityName" => "Glastonbury",
    "organizationName" => "The Brain Room Limited",
    "organizationalUnitName" => "PHP Documentation Team",
    "commonName" => "Wez Furlong",
    "emailAddress" => "wez@example.com"
);
*/
//print_r($arr); 

//Generate a certificate signing request
$csr = openssl_csr_new($arr, $privKey);

//This creates a self-signed cert that is valid for 365 days
$sscert = openssl_csr_sign($csr, null, $privKey, 365);

openssl_csr_export($csr, $csrout) and var_dump($csrout);
print "<br>";
openssl_x509_export($sscert, $certout) and var_dump($certout);
print "<br>";
openssl_pkey_export($privKey, $pkeyout, "mypassword") and var_dump($pkeyout);

// Show any errors that occurred here
/*while (($e = openssl_error_string()) !== false) {
    echo $e . "\n";
}*/

?>