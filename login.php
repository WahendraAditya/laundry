<?php
session_start();
require 'config/functions.php';
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

	// cek username
    if (mysqli_num_rows($result) === 1) {
    
    // cek password
        $row = mysqli_fetch_assoc($result);

			// set session
        if (password_verify($password, $row["password"])) {

            $_SESSION["login"] = true;
            $_SESSION["user"] = $row;

        	if ($row["role"] === "admin") {
        		    echo "<script>
              alert('Login Berhasil');
              document.location.href= 'admin/index.php';
             </script>";
        	}elseif ($row["role"] === "owner") {
        		    echo "<script>
              alert('Login Berhasil');
              document.location.href= 'admin/index.php';
             </script>";
        	}elseif ($row["role"] === "kasir") {
        		    echo "<script>
              alert('Login Berhasil');
              document.location.href= 'admin/index.php';
             </script>";
        	}
        }
    }

    $error = true;

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
		<div class="container">
	<div class="shadow p-3 mb-5 bg-white rounded mt-5">

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
  <div class="card-header bg-info text-white text-center">
    Login
  </div>
  <div class="card-body">
    <form method="post" action="" autocomplete="off">
    	<div class="form-group">
    		<label>Username</label>
    		<input type="text" name="username" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control">
    	</div>
    	<button type="submit" name="login" class="btn btn-info btn-block">Login</button>
    </form>
  </div>
</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>