<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/PPMC.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>PPMC Admin | Harga</title>
</head>
<body>
<?php
		include_once '../layouts/sidebar.php' 
	?>
	<section class="home-section">
	<nav>
			<div class="sidebar-button">
				<h3>Harga Barang</h3>
			</div>
         <div class="profile-details" style="background-color: none !important; border: none; background: none;">
				<button type="button" class="btn btn-tambah">
					<a href="harga-entry.php">Tambah Data</a>
				</button>
            <button type="button" class="btn btn-tambah">
					<a href="harga-cetak.php">Cetak</a>
				</button>
			</div>
		</nav>
      <div class="home-content">
         <h3>Harga Barang</h3>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Tanggal</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                  <!-- <th>Action</th> -->
               </tr>
            </thead>
            <tbody>
					<?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_harga";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						
						echo "
                    <tr>
                      <td>".$data['tanggal']."</td>
                      <td>{$data['harga']}</td>
                      <td >
                        <a class='btn-edit' href=harga-edit.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=harga-hapus.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
				</tbody>
			</table>
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
	  function showDetails(tanggal, nama, kategori, harga, status) {
      alert(`Tanggal: ${tanggal}\nNama: ${nama}\nKategori: ${kategori}\nHarga: ${harga}\nStatus: ${status}`);
	  }
   </script>
</body>
</html>
