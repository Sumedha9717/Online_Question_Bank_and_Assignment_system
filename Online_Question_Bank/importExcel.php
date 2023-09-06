<?php
include 'dbConnection.php';
if(isset($_POST['submit']))
{
   $name_file = $_POST['uploadfile'];
   if(empty($name_file))
   {
      header("location:addMembers.php?err=empty");
   }
}
$uploadfile = $_FILES['uploadfile']['tmp_name'];
require 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
$objExcel = PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorkSheetIterator() as $worksheet)
{
   $highestrow = $worksheet->getHighestRow();

   for($row=0; $row<$highestrow; $row++)
   {
    $nameWithInitials = $worksheet->getCellByColumnAndRow(0,$row)->getValue();
    $fullName = $worksheet->getCellByColumnAndRow(1,$row)->getValue();
    $dob = $worksheet->getCellByColumnAndRow(2,$row)->getValue();
    $gender = $worksheet->getCellByColumnAndRow(3,$row)->getValue();
    $nic = $worksheet->getCellByColumnAndRow(4,$row)->getValue();
    $phone = $worksheet->getCellByColumnAndRow(5,$row)->getValue();
    $email = $worksheet->getCellByColumnAndRow(6,$row)->getValue();
    $reg_no = $worksheet->getCellByColumnAndRow(7,$row)->getValue();
    $ati = $worksheet->getCellByColumnAndRow(8,$row)->getValue();
    $course = $worksheet->getCellByColumnAndRow(9,$row)->getValue();
    $username = $worksheet->getCellByColumnAndRow(10,$row)->getValue();
    $password = $worksheet->getCellByColumnAndRow(11,$row)->getValue();
    $user_type = $_POST['userType'];
    $active=1;
    if(!empty($nameWithInitials)||!empty($fullName)||!empty($dob))
    {
        $sql = "INSERT INTO user_details(nameWithInitials,fullName,dob,gender,nic,phone,email,regNo,center,course,username,password,userType,active_status) VALUES('$nameWithInitials','$fullName','$dob','$gender','$nic','$phone','$email','$reg_no','$ati','$course','$username','$password','$user_type',$active);";
	    $result = mysqli_query($connect,$sql);
    }
   }
}
header('location:display.php');
?>