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
		</nav>
      <div class="home-content">
         <h3>Harga Barang</h3>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Tanggal</th>
                  <th>Barang</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <!-- <th>Action</th> -->
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>08-11-2024</td>
                  <td>Amoxilin</td>
                  <td>450000</td>
                  <td><p class="success">Success</p></td>
                  <!-- <td>
                     <button class="btn_detail" onclick="showDetails('8-11-2024', 'Amoxilin', '450000', 'Success')">Detail</button>
                  </td> -->
               </tr>
               <!-- Add more rows as needed -->
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
