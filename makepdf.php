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
$idd=$_GET['id'];

$sql="SELECT *FROM student WHERE id=$idd";
$result=mysqli_query($conn,$sql); //or die ("successfully selected");
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){

	require("pdf/fpdf.php");
	$pdf=new FPDF();
	$pdf->Addpage();
	$pdf->SetFont("Arial","",12);
	$pdf->cell(0,10," STUDENT REGISTRATION FORM",1,1,'C');

	$pdf->cell(38,10,"NAME",1,0);
	$pdf->cell(0,10,$row['name'],1,1,'C');

    $pdf->cell(38,10,"FATHER",1,0);
	$pdf->cell(0,10,$row['father'],1,1,'C');

	$pdf->cell(38,10,"MOTHER",1,0);
	$pdf->cell(0,10,$row['mother'],1,1,'C');

    $pdf->cell(38,10,"ADDRESS",1,0);
	$pdf->cell(0,10,$row['address'],1,1,'C');

	$pdf->cell(38,10,"MOBILE NO",1,0);
	$pdf->cell(0,10,$row['mobile'],1,1,'C');

	$pdf->cell(38,10,"EMAIL",1,0);
	$pdf->cell(0,10,$row['email'],1,1,'C');
	$pdf->cell(0,10,"THIS IS COMPUTER GENERATE FORM NO NEED TO SIGNATURE",1,1,'C');

	$pdf->output();
}
}
?>