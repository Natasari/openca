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

	function do_signup(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$sql="INSERT INTO user (username, password, fname, lname) VALUES('" .$username . "','" . $password . "','" . $fname . "','". $lname."')";
		return mysql_query($sql);
	}
}
$ser = new certificate();
?>