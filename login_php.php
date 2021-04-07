
<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
mysql_connect($host,$user,$password); 
mysql_select_db($db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from login where user='".$uname."'AND Pass='".$password."'limit 10";

    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        "successfully logged in";
        exit();
    }
    else{
"invalid";
exit();
    }
}
?php>


<html>
    <head><title>Login Form Of SPherical</title></head>
<link rel="stylesheet" type="text/css" href="login.css">
    <body>
        <div class="loginbox">
            <img src="user.png" class="user">
            <h1>Login Here</h1>
            <form method="POST" action="login.php">
<p>Username</p>
<input type="text" name="user" placeholder="Enter Username">
<p>Password</p>
<input type="password" name="pass"><br>
<input type="submit" name="" value="Login"> <br>
<a href="">Lost Your Password?</a><br>
<a href="">Don't have an account?</a>

            </form>
        </div>
    </body>
</html>