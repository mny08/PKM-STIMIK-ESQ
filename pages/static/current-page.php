<?php
	$url = $_SERVER['REQUEST_URI'];
    $current = substr($url, 32, 5);

	if ($current == 'index') {
		$_SESSION['page'] = "dashboard";
		$_SESSION['subpage'] = "";
	} else if ($current == 'pages') {
    	$subpage = substr($url, 38, 6);
		if ($subpage == 'kelola') {
			if(isset($_SESSION['user']) && isset($_SESSION['level'])) {
	    		$page    = substr($url, 50, -4);
	    		if($page == 'kurikulum') {
					if($_SESSION['level'] != '1') header('location:../../connector.php?page=dashboard');
					$_SESSION['page'] = "kelola";
					$_SESSION['subpage'] = "kurikulum";
	    		} else if ($page == 'pengabdian-masyarakat') {
					if($_SESSION['level'] != '2') header('location:../../connector.php?page=dashboard');
					$_SESSION['page'] = "kelola";
					$_SESSION['subpage'] = "pengabdian-masyarakat";
	    		} else if ($page == 'penelitian') {
					if($_SESSION['level'] != '2') header('location:../../connector.php?page=dashboard');
					$_SESSION['page'] = "kelola";
					$_SESSION['subpage'] = "penelitian";
	    		} else if ($page == 'hasil-kerjasama') {
					if($_SESSION['level'] != '2') header('location:../../connector.php?page=dashboard');
					$_SESSION['page'] = "kelola";
					$_SESSION['subpage'] = "hasil-kerjasama";
	    		} else if ($page == 'prestasi-dosen') {
					if($_SESSION['level'] != '2') header('location:../../connector.php?page=dashboard');
					$_SESSION['page'] = "kelola";
					$_SESSION['subpage'] = "prestasi-dosen";
	    		} else if ($page == 'prestasi-mahasiswa') {
					if($_SESSION['level'] != '3') header('location:../../connector.php?page=dashboard');
					$_SESSION['page'] = "kelola";
					$_SESSION['subpage'] = "prestasi-mahasiswa";
	    		} 
			} else {
				header('location:../../connector.php?page=dashboard');
			}
		} else if ($subpage == 'public') {
			$page    = substr($url, 45, -4);
			$page2	 = substr($url, 45, -16);
			if($page == 'kurikulum') {
				$_SESSION['page'] = "kurikulum";
				$_SESSION['subpage'] = "";
    		} else if ($page == 'prestasi-dosen') {
				$_SESSION['page'] = "public";
				$_SESSION['subpage'] = "prestasi-dosen";
    		} else if ($page == 'prestasi-mahasiswa') {
				$_SESSION['page'] = "public";
				$_SESSION['subpage'] = "prestasi-mahasiswa";
    		} else if ($page == 'pengabdian-masyarakat') {
				$_SESSION['page'] = "pengabdian-masyarakat";
				$_SESSION['subpage'] = "";
    		} else if ($page == 'penelitian') {
				$_SESSION['page'] = "penelitian";
				$_SESSION['subpage'] = "";
    		} else if ($page == 'hasil-kerjasama') {
				$_SESSION['page'] = "hasil-kerjasama";
				$_SESSION['subpage'] = "";
    		/*} else if ($page == 'blog') {
				$_SESSION['page'] = "dashboard";
				$_SESSION['subpage'] = "";*/
    		} else if ($page == 'login' || $page2 == 'login') {
    			if(isset($_SESSION['user']) && isset($_SESSION['level'])) {
					header('location:../../connector.php?page=dashboard');
    			} else {
					$_SESSION['page'] = "login";
					$_SESSION['subpage'] = "";
				}
    		}
		}
	} else {
		//echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
		$_SESSION['page'] = "dashboard";
		$_SESSION['subpage'] = "";
	}
?>