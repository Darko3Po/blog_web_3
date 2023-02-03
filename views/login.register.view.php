<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a class="navbar-brand navbar-collapse ">Best WEB3 Blog</a>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item"><a href="index.php" class="nav-link">Back to Blog</a></li>
	</ul>
</nav>
<div class="jumbotron text-center"style="background-color:#cfcfcf;padding: 100px;">
	<h1>Login / Register</h1>
</div>

<div class="conatainer">
	<div class="row">
		<div class="col-6">
			<h4>Login</h4><br>
			<form action="login_register.php" method="POST">
				<input type="name" name="login_email" placeholder="email" class="form-control" required><br><br>
				<input type="password" name="login_password" placeholder="password" class="form-control" required><br><br>
				<button class="form-control btn btn-primary" name="loginBtn">Login</button>
			</form>
			<?php if($user->loggedUser):?>
				<div class="alert alert-success">Uspesno Logovanje <a href="index.php">Idi na Blog W3</a></div>
			<?php elseif(isset($_POST['loginBtn'])): ?>
				<div class="alert alert-danger">Username i password pogresni</div>
			<?php endif; ?>
		</div>
		<div class="col-6">
			<h4>Register</h4>
			<form action="login_register.php" method="POST">
				<input type="text" name="register_name" placeholder="name" class="form-control" required><br>
				<input type="text" name="register_email" placeholder="email" class="form-control" required><br>
				<input type="password" name="register_password" placeholder="password" class="form-control" required><br>
				<button class="form-control btn btn-warning" name="registerBtn">Login</button>
			</form>
			<?php if ($user->register_result): ?>
				<div class="alert alert-success">Uspjesna registracija! Ulogujte se</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php require_once 'partials/bottom.php'; ?>
