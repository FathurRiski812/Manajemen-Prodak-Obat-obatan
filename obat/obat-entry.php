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
	<title>PPMC | obat Entry</title>
</head>

<body>
<?php
		include_once '../layouts/sidebar.php' 
	?>
	<section class="home-section">
	<nav>
			<div class="sidebar-button">
				<h3>Obat</h3>
			</div>
		</nav>
		<div class="home-content">
			<h3>Input obat</h3>
			<div class="form-login">
			<form action="obat-proses.php" method="post" enctype="multipart/form-data">
					<label for="obat">Obat</label>
					<input class="input" type="text" name="Nama_Obat" id="obat" placeholder="obat" />
					<label for="obat">Harga</label>
					<input class="input" type="text" name="Harga" id="Harga" placeholder="Harga" />
					<label for="obat">Deskripsi</label>
					<input class="input" type="text" name="Deskripsi" id="Deskripsi" placeholder="Deskripsi" />
					<label for="photo">Photo</label>
					<label for="photo">Photo</label>
					<input type="file" name="Photo" id="photo" style="margin-bottom: 20px" />
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