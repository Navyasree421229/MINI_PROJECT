<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$connec=new mysqli('localhost','root','Navya@393','project_mini');
if($connec->connect_error){
    die('connection Failed :'.$connec->connect_error);
}
else{
    $stmt=$connec->prepare("insert into contact(name,email,message) values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "message sent successfully";
    $stmt->close();
    $connec->close();
}


?>