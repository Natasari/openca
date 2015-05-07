<?php
require"config/koneksi.php";
require"model/model.php";
session_start();

$request=$_REQUEST['request'];

switch($request){
        case "dn":

                require("view/header.php");
                require("view/aside.php");
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
                        $_SESSION['username'] = $ada['username'];
                        $_SESSION['id_user'] = $ada['id_user'];
                        header('Location:?request=dashboard');
                }else{
                        echo "tidak ada";
                }
                //require"view/dashboard.php";

        break;
        case "sign_user":
                $ada=$ser->do_signup();
                require"view/login.php";

        break;
        case "dashboard":
                $list=$ser->list_cert();
                require("view/header.php");
                require("view/aside.php");
                require("view/dashboard.php");
        break;
        case "download":
                $param=$_REQUEST['id'];
                require("view/download.php");
        break;
	default:           
                echo "halaman utama";
        break;
	}
?>
