<?php
include "conn.php";
if(isset($_POST['Login'])){

 
$adminEmail = $_POST['adminEmail'];
$Apassword = $_POST['Apassword'];

// $select = "SELECT `password`, `email`, FROM `admin` WHERE admin_name =' Aqsa'";
$select = "SELECT * FROM admin WHERE email = '$adminEmail' AND  admin_password= '$Apassword' ";
$data = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($data);

if ($row == 0) {
    echo "<script>alert(' Login failed !')</script>";
    echo "<script>window.location.href = 'adminlogin.php';</script>";

} else
{
    echo "<script>alert('Login Successfully!')</script>";
    echo "<script>window.location.href ='http://localhost/php%20mega%20project/admin/index.html';</script>"; 
 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONT AWESOME CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style2.css">
     <!-- css link  -->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="login-reg-panel">
		<div class="white-panel">
        <form action="adminlogin.php" method="post">	
			<div class="login-show">
				<h2 style="color:red;">ADMIN &nbsp;LOGIN</h2>
                <label for="aName">
                <!-- <i class="fa-solid fa-user"></i>&nbsp; Name:</label>
				<input type="text" name="adminName" placeholder="admin name" id="aName"> -->
                <label for="aName"> 
                <i class="fa-solid fa-envelope"></i>&nbsp; Email:</label>
				<input type="email" name="adminEmail" placeholder="Email">
                <!-- <label for="aName"><i class="fa-solid fa-phone"></i>&nbsp; phone no:</label>

				<input type="tel"name="adminPhno" placeholder="phone no"> -->
                <label for="aName"><i class="fa-solid fa-lock"></i>&nbsp; password:</label>

				<input type="password"name="Apassword" placeholder="Password">
				<button type="submit" class="btn btn-dark" value="Login" name="Login">Login</button>
				<a href="">Forgot password?</a>
			</div>
            </form>
			
		</div>
	</div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/index.js"></script>
    <!-- bootstrap cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>