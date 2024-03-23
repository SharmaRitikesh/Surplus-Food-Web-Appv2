<?php
$userName =$_POST['userName'];
$password =$_POST['password'];

//database connectiom
$conn = new mysqli('localhost','root','','test1');
if($conn-> connect_error){
    die('connection failed : .$conn-> connect_error');
}else{
    $stmt = $conn-> prepare("insert into registration(userName,password) values(?,?)");
    $stmt -> bind_param("ss",$userName,$password);
    $stmt ->execute();
    echo "registration successful..."
    $stmt->close();
    $conn->close();
}
?>