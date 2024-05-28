<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="../dsglogo/PPMC.png" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> PPMC Admin | Obat</title>
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
			<div class="profile-details" style="background-color: none !important; border: none; background: none;">
				<button type="button" class="btn btn-tambah">
					<a href="obat-entry.php">Tambah Data</a>
				</button>
			</div>
		</nav>
		<div class="home-content">
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Photo</th>
						<th>Nama Obat</th>
						<th scope="col" style="width: 30%">Deskripsi</th>
						<th scope="col" style="width: 15%">Harga</th>
						<th scope="col" style="width: 20%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_obat";
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
                      <td>
                        <img src='../img_categories/".$data["Photo"]."' width='200px'>
                      </td>
                      <td>".$data['Nama_Obat']."</td>
					  <td>{$data['Deskripsi']}</td>
                      <td>{$data['Harga']}</td>
                      <td >
                        <a class='btn-edit' href=obat-edit.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=obat-hapus.php?id=$data[id]>
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
</body>
</html>