<?php 
$arr = $_POST["cert_dn"];
print_r($arr); 
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


// Generate a new private (and public) key pair
$res = openssl_pkey_new($config) or die('Fatal: Error creating Certificate Key');
openssl_pkey_export($res, $privKey);


$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];

$data = "plaintext data goes here";


// Encrypt the data to $encrypted using the public key
openssl_public_encrypt($data, $encrypted, $pubKey);
// Decrypt the data using the private key and store the results in $decrypted
openssl_private_decrypt($encrypted, $decrypted, $privKey);

echo $decrypted;

/*$dn = array(
    "countryName" => "UK",
    "stateOrProvinceName" => "Somerset",
    "localityName" => "Glastonbury",
    "organizationName" => "The Brain Room Limited",
    "organizationalUnitName" => "PHP Documentation Team",
    "commonName" => "Wez Furlong",
    "emailAddress" => "wez@example.com"
);*/

?>