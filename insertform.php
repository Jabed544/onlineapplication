<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn){
	echo "Not connect to the server";
}
$dbase=mysqli_select_db($conn,"studentdata");
if(!$dbase){
	echo "Not select database";
}else{
	//echo "database select successfully";
}

$name=$_POST['name'];
$father=$_POST['fname'];
$mother=$_POST['mname'];
$address=$_POST['address'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$adhar=$_POST['adhar'];

$sql="INSERT INTO student(name,father,mother,address,age,mobile,email,adhar )
VALUES('$name','$father','$mother','$address','$age','$mobile','$email','$adhar')";
if(! mysqli_query($conn,$sql)){
	echo "DATA NOT INSERTED";
}else{
	echo "<h1 style='color:green'>FORM SUBMITED SUCCESSFULLY</h1>";
}
?>