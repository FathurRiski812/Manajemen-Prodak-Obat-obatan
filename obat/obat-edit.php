<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'obat.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_obat WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);




	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>PPMC Admin | obat Entry</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">PPMC</span>
	</div>
	<ul class="nav-links">
	   <li>
		<a href="../admin.php">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Dashboard</span>
		</a>
	   </li>
	   <li>
		<a href="../obat/obat.php" class="active">
		   <i class="bx bx-box"></i>
		   <span class="links_name">obat</span>
		</a>
	   </li>
	   <li>
		<a href="../transaction/transaction.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Transaction</span>
		</a>
	   </li>
	   <li>
		<a href="../logout.php">
		   <i class="bx bx-log-out"></i>
		   <span class="links_name">Log out</span>
		</a>
	   </li>
	</ul>
   </div>
   <section class="home-section">
	<nav>
	   <div class="sidebar-button">
		<i class="bx bx-menu sidebarBtn"></i>
	   </div>
	   <div class="profile-details">
		<span class="admin_name">PPMC Admin</span>
	   </div>
	</nav>
	<div class="home-content">
	   <h3>Input Obat</h3>
	   <div class="form-login">
		<form
              action="obat-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
               <input type="hidden" name="id" value="<?= $data['id'] ?>">
               <input type="hidden" name="photoLama" value="<?= $data['Photo'] ?>">
               <label for="obat">Nama obat</label>
               <input
                 class="input"
                 type="text"
                 name="nama_obat"
                 id="obat"
                 placeholder="nama_obat"
                 value="<?= $data['Nama_Obat'] ?>"
               />
               <label for="obat">Harga</label>
               <input
                 class="input"
                 type="text"
                 name="harga"
                 id="harga"
                 placeholder="Harga"
                 value="<?= $data['Harga']?>"
               />
                <label for="obat">Deskripsi</label>
                <input
                  class="input"
                  type="text"
                  name="deskripsi"
                  id="deskripsi"
                  placeholder="deskripsi"
                  value="<?= $data['Deskripsi']?>"
                />
               <label for="photo">Photo</label>
               <img src="../img_obat/<?= $data['Photo'] ?>" alt="" width="200px">
               <input
                 type="file"
                 name="photo"
                 id="photo"
                 style="margin-bottom: 20px"
               />
               <button type="submit" class="btn btn-simpan" name="edit">
                 Edit
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
