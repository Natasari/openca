<?php 
$arr = $_POST["cert_dn"];
$my_passphrase = $_POST["passphrase"];
$my_keyBit = $arr['keySize'];

print "<h2>Creating Certificate Key</h2>";
print "PASSWORD:".$my_passphrase."<BR>";
print "KEY BIT:".$my_keyBit."<BR>";

$config = array(
    "digest_alg" => "sha1",
    "private_key_bits" => (int) $my_keyBit,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
    "encrypt_key_cipher" => OPENSSL_CIPHER_3DES,
);


// Generate a new private (and public) key pair
$res = openssl_pkey_new($config) or die('Fatal: Error creating Certificate Key');
openssl_pkey_export($res, $privKey);


$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];

//print "private key:".$privKey."<br>";
//print "<br><br>public key :".$pubKey."<br> <br>";

//Make private & public key file
openssl_pkey_export_to_file($privKey, 'private.pem');
file_put_contents('public.pem', $pubKey);

//Generate a certificate signing request
$csr = openssl_csr_new($arr, $privKey);
//Make csr file
openssl_csr_export_to_file ( $csr, 'ex.csr');

//This creates a self-signed cert that is valid for 365 days
$sscert = openssl_csr_sign($csr, null, $privKey, $arr['days']);

openssl_x509_export_to_file($sscert, 'ex.cer');


openssl_csr_export($csr, $csrout) and var_dump($csrout);
print "<br><br>";
openssl_x509_export($sscert, $certout) and var_dump($certout);

print "<br><br> PKEY------------------<br>";
openssl_pkey_export($privKey, $pkeyout, $my_passphrase) and var_dump($pkeyout);


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
//$fp = fopen(dirname(__FILE__) . "/cert.crt","r");
//$a = fread($fp,8192);
//fclose($fp); 

?>