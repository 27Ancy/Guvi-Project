<?php 
    
    if(!isset($_POST['detail'])){
        include(_DIR_."\..\\register.html");
    }else{
        $input = $_POST['detail'];
        $cred = json_decode($input);
        
        
        $conn = new mysqli("localhost","root","","Project");
        $stmt = $conn->prepare("INSERT INTO Login VALUES(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss",$Name, $Email,$Password,$Phone,$Gender,$Language,$State,$City,$Postal,$About);
        $Name =strval($cred->Name);
        $Email =strval($cred->Email);
        $Password =strval($cred->$Password);
        $Phone =strval($cred->$Phone);
        $Gender =strval($cred->$Gender);
        $Language =strval($cred->$Language);
        $State =strval($cred->$State);
        $City =strval($cred->City);
        $Postal =strval($cred->Postal);
        $About =strval($cred->About);
        echo $stmt->execute();
        
      
    }
?>