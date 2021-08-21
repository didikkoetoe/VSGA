<?php 

session_start();

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username === 'didik04' && $password === 'didik'){

		$_SESSION['login'] = true;

		header('Location: index.php');
		exit;
	}

	$error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6">
				<div class="container border rounded shadow my-5 bg-white">
					<h2 class="text-center my-3">Login</h2>

					<?php if(isset($error)) : ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<i class="bi bi-exclamation-triangle-fill"></i>
						  Username / Password salah
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php endif; ?>

					<hr>
					<form action="" method="POST">
						<div class="mb-3">
							<div class="input-group">
								<div class="input-group-text"><i class="bi bi-person-fill"></i></div>
								<input type="text" name="username" id="username" class="form-control" autocomplete="off" placeholder="Masukan Username">
							</div>
						</div>
						<div class="mb-3">
							<div class="input-group">
								<div class="input-group-text"><i class="bi bi-shield-lock-fill"></i></div>
								<input type="password" name="password" id="password" class="form-control" autocomplete="off" placeholder="Masukan password">
							</div>
						</div>
						<div class="mb-3">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="ingat">
							  <label class="form-check-label" for="flexCheckDefault">
							    Ingat Saya
							  </label>
							</div>
						</div>
						<div class="mb-3">
							<button type="submit" name="login" class="btn btn-primary col-12">Masuk</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>