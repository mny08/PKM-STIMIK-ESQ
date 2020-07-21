<?php 
	$table	= $_GET['table'];
	$action = $_GET['action'];
	$dir	= "../../config/kelola-data/";

	if ($table == "matakuliah") {
	 	include $dir . 'kurikulum.php';
		$do = new kurikulum();

	 	if ($action == "store") {
	 		$do->store($_POST['kode_matakuliah'], $_POST['matakuliah'], $_POST['semester'], $_POST['sks_teori'], $_POST['sks_lab'], $_POST['jenis'], $_POST['file'], $_POST['id_user']);
	 		header("location:kurikulum.php");
	 	} elseif ($action == "update") {
	 		$do->update($_POST['id'], $_POST['kode_matakuliah'], $_POST['matakuliah'], $_POST['semester'], $_POST['sks_teori'], $_POST['sks_lab'], $_POST['jenis'], $_POST['file2']);
	 		header("location:kurikulum.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id']);
			header("location:kurikulum.php");
	 	}
	} elseif ($table == "prestasi-dosen") {
	 	include $dir . 'prestasi-dosen.php';
		$do = new prestasiDosen();

	 	if ($action == "store") {
	 		$do->store($_POST['bidang_keahlian'], $_POST['tingkat'], $_POST['tahun'], $_POST['file'], $_POST['id_user']);
	 		header("location:prestasi-dosen.php");
	 	} elseif ($action == "update") {
	 		$do->update($_POST['id'], $_POST['bidang_keahlian'], $_POST['tingkat'], $_POST['tahun'], $_POST['file2']);
	 		header("location:prestasi-dosen.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id']);
			header("location:prestasi-dosen.php");
	 	}
	} elseif ($table == "prestasi-mahasiswa") {
	 	include $dir . 'prestasi-mahasiswa.php';
		$do = new prestasiMahasiswa();

	 	if ($action == "store") {
	 		$do->store($_POST['nama_kegiatan'], $_POST['prestasi'], $_POST['tingkat'], $_POST['tahun'], $_POST['keterangan'], $_POST['file'], $_POST['id_user']);
	 		header("location:prestasi-mahasiswa.php");
	 	} elseif ($action == "update") {
	 		$do->update($_POST['id'], $_POST['nama_kegiatan'], $_POST['prestasi'], $_POST['tingkat'], $_POST['tahun'], $_POST['keterangan'], $_POST['file2']);
	 		header("location:prestasi-mahasiswa.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id']);
			header("location:prestasi-mahasiswa.php");
	 	}
	} elseif ($table == "pengabdian-masyarakat") {
	 	include $dir . 'pengabdian-masyarakat.php';
		$do = new pengabdianMasyarakat();

	 	if ($action == "store") {
	 		$do->store($_POST['tema'], $_POST['judul'], $_POST['deskripsi'], $_POST['tanggal'], $_POST['tempat'], $_POST['sumber_pembiayaan'], str_replace(".", "", $_POST['biaya']), $_POST['evaluasi'], substr($_POST['kode_matakuliah'], 0, 7), $_POST['file'], $_POST['id_user']);
	 		//header("location:pengabdian-masyarakat.php");
	 	} elseif ($action == "update") {
	 		$do->update($_POST['id'], $_POST['tema'], $_POST['judul'], $_POST['deskripsi'], $_POST['tanggal'], $_POST['tempat'], $_POST['sumber_pembiayaan'], str_replace(".", "", $_POST['biaya']), $_POST['evaluasi'], substr($_POST['kode_matakuliah'], 0, 7), $_POST['file2']);
	 		header("location:pengabdian-masyarakat.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id']);
			header("location:pengabdian-masyarakat.php");
	 	}
	} elseif ($table == "penelitian") {
	 	include $dir . 'penelitian.php';
		$do = new penelitian();

	 	if ($action == "store") {
	 		$do->store($_POST['tema'], $_POST['judul'], $_POST['deskripsi'], $_POST['tanggal'], $_POST['tempat'], $_POST['sumber_pembiayaan'], str_replace(".", "", $_POST['biaya']), $_POST['evaluasi'], substr($_POST['kode_matakuliah'], 0, 7), $_POST['file'], $_POST['id_user']);
	 		header("location:penelitian.php");
	 	} elseif ($action == "update") {
	 		$do->update($_POST['id'], $_POST['tema'], $_POST['judul'], $_POST['deskripsi'], $_POST['tanggal'], $_POST['tempat'], $_POST['sumber_pembiayaan'], str_replace(".", "", $_POST['biaya']), $_POST['evaluasi'], substr($_POST['kode_matakuliah'], 0, 7), $_POST['file2']);
	 		header("location:penelitian.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id']);
			header("location:penelitian.php");
	 	}
	} elseif ($table == "hasil-kerjasama") {
	 	include $dir . 'hasil-kerjasama.php';
		$do = new hasilKerjasama();

	 	if ($action == "store") {
	 		$do->store($_POST['judul_kegiatan'], $_POST['lembaga_mitra'], $_POST['tingkat'], $_POST['tanggal'], $_POST['durasi'], $_POST['manfaat'], $_POST['file'], $_POST['id_user']);
	 		header("location:hasil-kerjasama.php");
	 	} elseif ($action == "update") {
	 		$do->update($_POST['id'], $_POST['judul_kegiatan'], $_POST['lembaga_mitra'], $_POST['tingkat'], $_POST['tanggal'], $_POST['durasi'], $_POST['manfaat'], $_POST['file2']);
	 		header("location:hasil-kerjasama.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id']);
			header("location:hasil-kerjasama.php");
	 	}
	} elseif ($table == "user") {
	 	include $dir . 'user.php';
		$do = new user();

	 	if ($action == "store") {
	 		$do->store($_POST['email'], $_POST['password'], $_POST['level']);
	 		header("location:user.php");
	 	} elseif ($action == "update") {
	 		$do->update($_POST['id'], $_POST['email'], $_POST['password'], $_POST['level']);
	 		header("location:user.php");
	 	} elseif ($action == "delete") {
	 		$do->delete($_POST['id']);
			header("location:user.php");
	 	}
	}
?>