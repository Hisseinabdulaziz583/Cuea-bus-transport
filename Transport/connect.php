<?php
$name=$_POST['uname'];
$registration=$_POST['regno'];
$email=$_POST['mail'];
$password=$_POST['psw'];


//Database connection
$conn=new mysqli('localhost','root','','vreg');
if($conn->connect_error){
	die('connection failed :'.$conn->connect_error);

}
else{
	$stmt=$conn->prepare("insert into dtable(name,registration,email,password) values(?,?,?,?)");
	$stmt->bind_param("siss",$name,$registration,$email,$password);
	$stmt->execute();
	echo"The driver is successfully registered...";
	$stmt->close();
	$conn->close();
}
?>