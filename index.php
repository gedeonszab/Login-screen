<!DOCTYPE html>
<html>
<head>
	<title>Titkosított színek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<scrip language="JavaScript" src="login.js">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="login-container">
		<section class="login" id="login">
			<form class="login-form" action="login.php" method="post">
				<header class="head">
					<h2>Titkosított színek</h2>
					<h4>Szabó Gedeon - JDN57R</h4>
				</header>
				<div class="err">
				<?php if (isset($_GET['error'])) { ?>
					<p><?php echo $_GET['error']; ?></p>
				<?php } ?>
				</div>

				<p>Email cím</p>
				<input type="text" name="uname" class="login-input" placeholder="Add meg az email címed!"><br>

				<p>Jelszó</p>
				<input type="password" name="password" class="login-input" placeholder="Add meg a jelszavad!"><br>

				<button type="submit" class="login-button">Belépés</button>
			</form>
			<?php if (isset($_GET['kep'])) { ?>
				<br />
				<img src="<?php echo $_GET['kep']; ?>.png">
			<?php } ?>
		</section>
		<p>Ver 1.0, <a href="https://github.com/gedeonszab">Szabó Gedeon</a> - JDN57R</p>
	</div>
</body>
</html>