<?php session_start(); ?>
<?php 
//Gọi file connection.php ở bài trước
require_once("Model/DBConnect.php");

	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["login_teacher"])) {
	// lấy thông tin người dùng
	$tea_username = $_POST["teacher_username"];
	$tea_password = $_POST["teacher_password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$tea_username = strip_tags($tea_username);
	$tea_username = addslashes($tea_username);
	$tea_password = strip_tags($tea_password);
	$tea_password = addslashes($tea_password);

	if (empty($_POST['teacher_username']) or empty($_POST['teacher_password'])) {
		echo "<h1 style='text-align:center;font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;'> Please Enter Full Username and Password !</h1>";
	}else{
		$sql = "SELECT * FROM teacher where username = '$tea_username' and password = '$tea_password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "<h1 style='text-align:center;font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;'> Error Username or Password !</h1>";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["teacherid"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: management2.php');
		}
	}
}
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" href="styles.css">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login Trainer</h3>
				
			</div>
			<div class="card-body">
				<form action="" method="POST" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="teacher_username" placeholder="Username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="teacher_password" placeholder="Password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="login_teacher" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>