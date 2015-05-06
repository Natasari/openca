<?php
require"config/koneksi.php";
require"model/model.php";

$con = mysql_connect('localhost','root','peni');


$request=$_REQUEST['request'];

switch($request){
        case "dn":
                require"view/dn.php";
        break;
        case "dn_function":
        	require"view/ssl.php";
        break;
        case "login":
        	require"view/login.php";
        break;
        case "login_user":
                $ada=$ser->show();
                
                if($ada != null){
                        print_r($ada);
                }
                else{
                        echo "data tidak ada";
                }
        break;
	default:           
                echo "halaman utama";
        break;
	}
?>
