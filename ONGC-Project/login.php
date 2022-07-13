<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();
$data = new mysqli($host,$user,$password,$db);
if($data ->connect_error)
{

    die("Not connected").mysqli_connect_error();

}
// if($_SERVER["REQUEST_METHOD"]=="POST"){
 
//      $username=$_POST['username'];
//      $password=$_POST['password'];
    
//  $sql="select * from login where username ='".$username."' AND password='".$password."'";

// $result= mysqli_query($data,$sql);
// $row = mysqli_fetch_array($result);

// if($row["usertype"]=="user")
// {
//   header("location:userhome.php");
     
// }
// elseif($row["usertype"]=="admin"){

//     header("location:adminhome.php");

// }
//  else
//  {
//     echo "incorrect error enter again";
//  }

// }
?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background-color: black;">
  <center>
  <h1>Login</h1>
<!-- <caption>Login</caption> -->
 <br>
 <div style="background-color: gray; width:500px">
 <form  action="#" method="POST">
    <div>
        <br><br>
        <label>Username</label>
        <input type="text" name="username" required>
    </div><br>

    <div>    
        <label>Password</label>
        <input type="password" name="password" required>
    </div><br>
    
    <div>    
        <input type="submit" value="Login">
        <br><br>
    </div>
</form> 
    <br>
 </div>   
  </center> 
</body>
</html>