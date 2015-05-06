<?php
require"config/koneksi.php";
require"model/model.php";

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
                        $nama = $ada['username'];
                        require("view/header.php");
                        require("view/dashboard.php");
                }else{
                        echo "tidak ada";
                }
                //require"view/dashboard.php";

        break;
        case "sign_user":
                $ada=$ser->do_signup();
                //require"view/dashboard.php";

        break;
	default:           
                echo "halaman utama";
        break;
	}
?>
