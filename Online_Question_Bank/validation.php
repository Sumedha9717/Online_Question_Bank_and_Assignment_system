<?php
function checkNIC($nic)
{ 
    require 'dbConnection.php';
    $found = true;
    $sql = "SELECT * FROM user_details WHERE nic ='".$nic."'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_num_rows($result);
    $len = strlen($nic);
    if($len==10||$len==12)
    {
        if($row>0)
        {
            $found = true;
        } 
        else
        {
            $found = false;
        }
    }
    else
    {
        $found = false;
    }
    return $found;
}
function checkRegNo($reg_no)
{
    require 'dbConnection.php';
    $found = true;
    $sql = "SELECT * FROM user_details WHERE regNo ='".$reg_no."'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_num_rows($result);
    if($row>0)
    {
        $found = true;
    } 
    else
    {
        $found = false;
    }
    return $found;
}
function checkValidRegNo($reg_no,$ati,$course)
{
    $valid = true;
    $rn_first_part = substr($reg_no,0,3);
    $course_name = substr($reg_no,4,6);
    $course_method = substr($reg_no,12,13);
    if($ati==="Kandy" && $rn_first_part==="KAN")
    {
        $valid = true;
    }
    else
    {
        $valid = false;
    }
    return $valid;
}
?>