<?php
	class pengabdianMasyarakat {
		var $table	= "pengabdian_masyarakat";
		var $table2	= "matakuliah";
		var $dir	= "../../config/database.php";

		function store ($tema, $judul, $deskripsi, $tanggal, $tempat, $sumber_pembiayaan, $biaya, $evaluasi, $kode_matakuliah, $file, $id_user) {
			include $this->dir;
			$matakuliah = mysqli_fetch_array(mysqli_query($connection, "SELECT id FROM " . $this->table2 . " WHERE kode_matakuliah='$kode_matakuliah'"));
			$id_matakuliah = $matakuliah['id'];
			$data = mysqli_query($connection, "INSERT INTO " . $this->table . "(tema, judul, deskripsi, tanggal, tempat, sumber_pembiayaan, biaya, evaluasi, id_matakuliah, file, id_user) VALUES('$tema', '$judul', '$deskripsi', '$tanggal', '$tempat', '$sumber_pembiayaan', '$biaya', '$evaluasi', '$id_matakuliah', '$file', '$id_user')");
			session_start();
			if ($data) $_SESSION['message'] = "save-success";
			else $_SESSION['message'] = "save-failed";
		}

		function update ($id, $tema, $judul, $deskripsi, $tanggal, $tempat, $sumber_pembiayaan, $biaya, $evaluasi, $kode_matakuliah, $file) {
			include $this->dir;
			$matakuliah = mysqli_fetch_array(mysqli_query($connection, "SELECT id FROM " . $this->table2 . " WHERE kode_matakuliah='$kode_matakuliah'"));
			$id_matakuliah = $matakuliah['id'];
			$data = mysqli_query($connection, "UPDATE " . $this->table . " SET tema='$tema', judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal', tempat='$tempat', sumber_pembiayaan='$sumber_pembiayaan', biaya='$biaya', evaluasi='$evaluasi', id_matakuliah='$id_matakuliah', file='$file' WHERE id='$id'");
			session_start();
			if ($data) $_SESSION['message'] = "edit-success";
			else $_SESSION['message'] = "edit-failed";
		}

		function delete ($id) {
			include $this->dir;
			$data = mysqli_query($connection, "DELETE FROM " . $this->table . " WHERE id='$id'");
			session_start();
			if ($data) $_SESSION['message'] = "delete-success";
			else $_SESSION['message'] = "delete-failed";
		}

		function show() {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table);
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}

		function search_by_id ($id) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE id='$id'");
			if(mysqli_num_rows($data) == 0) return null;
			$result = mysqli_fetch_array($data);
			return $result;
		}
		
		function search_field_by_id ($id, $field) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field' FROM " . $this->table . " WHERE id='$id'");
			if(mysqli_num_rows($data) == 0) return null;
			$result = mysqli_fetch_array($data);
			return $result;
		}
		
		function search_by_field ($field, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE $field='$param'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}

		function search_field_by_field ($field1, $field2, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field1' FROM " . $this->table . " WHERE $field2='$param'");
			if(mysqli_num_rows($data) == 0) return null;
			while($d = mysqli_fetch_array($data)) $result[] = $d;
			return $result;
		}
	}
?>