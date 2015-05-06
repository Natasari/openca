<?php
class certificate{
	function show(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$query=mysql_query($sql);
		$rec=mysql_fetch_assoc($query);
		return $rec;
	}
	
}
$ser = new certificate();
?>