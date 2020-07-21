<?php
	class kurikulum {
		var $table	= "matakuliah";
		var $dir	= "../../config/database.php";
	 
		function store ($kode_matakuliah, $matakuliah, $semester, $sks_teori, $sks_lab, $jenis, $file, $id_user) {
			include $this->dir;
			$data = mysqli_query($connection, "INSERT INTO " . $this->table . "(kode_matakuliah, matakuliah, semester, sks_teori, sks_lab, jenis, file, id_user) VALUES('$kode_matakuliah', '$matakuliah', '$semester', '$sks_teori', '$sks_lab', '$jenis', '$file', '$id_user')");
			session_start();
			if ($data) $_SESSION['message'] = "save-success";
			else $_SESSION['message'] = "save-failed";
		}

		function update ($id, $kode_matakuliah, $matakuliah, $semester, $sks_teori, $sks_lab, $jenis, $file) {
			include $this->dir;
			$data = mysqli_query($connection, "UPDATE " . $this->table . " SET kode_matakuliah='$kode_matakuliah', matakuliah='$matakuliah', semester='$semester', sks_teori='$sks_teori', sks_lab='$sks_lab', jenis='$jenis', file='$file' WHERE id='$id'");
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