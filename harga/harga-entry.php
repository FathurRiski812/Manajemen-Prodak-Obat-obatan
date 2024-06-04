<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<i><img src="../PPMC.png" alt=""></i>
	<link rel="stylesheet" href="../css/admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>PPMC | harga Entry</title>
</head>

<body>
<?php
		include_once '../layouts/sidebar.php' 
	?>
	<section class="home-section">
	<nav>
			<div class="sidebar-button">
				<h3>Harga</h3>
			</div>
		</nav>
		<div class="home-content">
			<h3>Input harga</h3>
			<div class="form-login">
			<form action="harga-proses.php" method="post" enctype="multipart/form-data">
					<label for="tanggal">Tanggal</label>
					<input class="input" type="text" name="tanggal" id="harga" placeholder="Tanggal" />
					<label for="harga">Harga</label>
					<input class="input" type="text" name="harga" id="harga" placeholder="Harga" />
					<button type="submit" class="btn btn-simpan" name="simpan">
						Simpan
					</button>
				</form>
			</div>
		</div>
	</section>
	<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function () {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script>
</body>

</html>