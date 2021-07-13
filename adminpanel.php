<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-color:gray;
		}
	table{
		border-collapse:collapse;
         width:100%;
         font-size:monospace;
         font-size:18px;
         text-align:center;
          background-color:white;
		}
	th{
		height:40px;
      
	}
	td{
		height:40px;
		color:blue;
      
	}		
		
	</style>
</head>
<body>
	<h1 style="text-align:center"> ALL DATA FIND HERE</h1>
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

$sql="SELECT *FROM student";
$result=mysqli_query($conn,$sql) or die ("successfully selected");
if(mysqli_num_rows($result)>0){
?>
<table border=1>
	<tr>
		<td>NO</td>
		<td>NAME</td>
	    <td>MOBILE</td>
		<td>AGE</td>
		<td>EMAIL</td>
		<td>PRINT</td>
		
	</tr>
<?php 
while($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<th>".$row['id']."</th>";
echo "<th>".$row['name']."</th>";
echo "<th>".$row['mobile']."</th>";
echo "<th>".$row['age']."</th>";
echo "<th>".$row['email']."</th>";
 echo '<th style="color:blue"><a href ="makepdf.php?id='.$row['id'].'">VEIW</a></th>';
echo "<tr>";
}
?>

</table>

<?php
 }
?>

</body>
</html>