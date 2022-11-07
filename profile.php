<?php
 $username=$_post['username'];
 $Name =$_post['Name'];
 $Email=$_post['email'];
 $phone=$_post['phone'];
 $Gender=$_post['Gender'];
 $Language=$_post['Language'];
 $State=$_post['State'];
 $City=$_post['City'];
 $Postal=$_post['Potal code'];
 $About=$_post["About"];

 if(!empty($Name)|| !empty($email) || !empty($phone) || !empty($Gender) || !empty($Language)
 || !empty($State) || !empty($City) || !empty($City) || !empty($Postal) || !empty($About)){
    $host="localhost";

 }
 else{
    echo "All field are required";
    die();
 }


?>
