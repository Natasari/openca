
<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$request=$_REQUEST['request'];

	switch($request){
        case "dn":
                require"dn.php";
        break;
        case "dn_function":
        		require"ssl.php";
        break;
	default:           
                echo "halaman utama";

        break;
	}
?>