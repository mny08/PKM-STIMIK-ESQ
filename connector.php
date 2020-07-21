<?php 
	session_start();
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'dashboard':
				header('location:index.php');
				break;
			case 'kelola-hasil-kerjasama':
				header('location:pages/kelola-data/hasil-kerjasama.php');
				break;
			case 'kelola-kurikulum':
				header('location:pages/kelola-data/kurikulum.php');
				break;
			case 'kelola-penelitian':
				header('location:pages/kelola-data/penelitian.php');
				break;
			case 'kelola-pengabdian-masyarakat':
				header('location:pages/kelola-data/pengabdian-masyarakat.php');
				break;
			case 'kelola-prestasi-dosen':
				header('location:pages/kelola-data/prestasi-dosen.php');
				break;
			case 'kelola-prestasi-mahasiswa':
				header('location:pages/kelola-data/prestasi-mahasiswa.php');
				break;
			case 'hasil-kerjasama':
				header('location:pages/public/hasil-kerjasama.php');
				break;
			case 'kurikulum':
				header('location:pages/public/kurikulum.php');
				break;
			case 'penelitian':
				header('location:pages/public/penelitian.php');
				break;
			case 'pengabdian-masyarakat':
				header('location:pages/public/pengabdian-masyarakat.php');
				break;
			case 'prestasi-dosen':
				header('location:pages/public/prestasi-dosen.php');
				break;
			case 'prestasi-mahasiswa':
				header('location:pages/public/prestasi-mahasiswa.php');
				break;
			case 'blog':
				header('location:pages/public/blog.php');
				break;	
			case 'login':
				header('location:pages/public/login.php');
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	} else {
		header('location:index.php');
	}
?>