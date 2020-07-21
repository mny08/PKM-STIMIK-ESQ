<section class="content-header">
    <?php
    	if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
	    	if($_SESSION['page']=='Dashboard') {
	    		echo "<h1>Dashboard</h1>
	    		<ol class='breadcrumb'><li><i class='fa fa-dashboard'></i> Dashboard</li></ol>";
	    	} else if($_SESSION['page']=='kelola') {
	    		if($_SESSION['subpage']=='kurikulum') {
	    			echo "<h1>Kelola Data Kurikulum</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Kurikulum</li></ol>";
	    		} else if($_SESSION['subpage']=='prestasi-dosen') {
	    			echo "<h1>Kelola Data Prestasi Dosen</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Prestasi Dosen</li></ol>";
	    		} else if($_SESSION['subpage']=='prestasi-mahasiswa') {
	    			echo "<h1>Kelola Data Prestasi Mahasiswa</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Prestasi Mahasiswa</li></ol>";
	    		} else if($_SESSION['subpage']=='pengabdian-masyarakat') {
	    			echo "<h1>Kelola Data Pengabdian Masyarakat</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Pengabdian Masyarakat</li></ol>";
	    		} else if($_SESSION['subpage']=='penelitian') {
	    			echo "<h1>Kelola Data Penelitian</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Penelitian</li></ol>";
	    		} else if($_SESSION['subpage']=='hasil-kerjasama') {
	    			echo "<h1>Kelola Data Hasil Kerjasama</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Hasil Kerjasama</li></ol>";
	    		}
	    	} else if($_SESSION['page']=='kurikulum') {
	    		echo "<h1>Kurikulum</h1>
	    		<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Kurikulum</li></ol>";
	    	} else if($_SESSION['page']=='pengabdian-masyarakat') {
	    		echo "<h1>Pengabdian Masyarakat</h1>
	    		<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Pengabdian Masyarakat</li></ol>";
	    	} else if($_SESSION['page']=='penelitian') {
	    		echo "<h1>Penelitian</h1>
	    		<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Penelitian</li></ol>";
	    	} else if($_SESSION['page']=='hasil-kerjasama') {
	    		echo "<h1>Hasil Kerjasama</h1>
	    		<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Hasil Kerjasama</li></ol>";
	    	} else if($_SESSION['page']=='public') {
	    		if($_SESSION['subpage']=='prestasi-dosen') {
	    			echo "<h1>Prestasi Dosen</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Prestasi</li><li class='active'>Prestasi Dosen</li></ol>";
	    		} else if($_SESSION['subpage']=='prestasi-mahasiswa') {
	    			echo "<h1>Prestasi Mahasiswa</h1>
	    			<ol class='breadcrumb'><li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Prestasi</li><li class='active'>Prestasi Mahasiswa</li></ol>";
	    		}
	    	}
	    } else {
	    	echo "<h1>Dashboard</h1>
	    	<ol class='breadcrumb'><li><i class='fa fa-dashboard'></i> Dashboard</li></ol>";
	    }
    ?>
</section>