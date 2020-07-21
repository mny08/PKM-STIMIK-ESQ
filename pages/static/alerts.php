<?php if(isset($_SESSION['message'])) {
    if ($_SESSION['message'] == "save-success") { ?>
    <div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-ban'></i> Alert!</h4>
        Sukses! Menambahkan Data
    </div>
<?php } else if ($_SESSION['message'] == "save-failed") { ?>
	<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<h4><i class='icon fa fa-ban'></i> Alert!</h4>
		Gagal! Menambahkan Data
	</div>
<?php } else if ($_SESSION['message'] == "edit-success") { ?>
    <div class='alert alert-info alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-ban'></i> Alert!</h4>
        Sukses! Mengedit Data
    </div>
<?php } else if ($_SESSION['message'] == "edit-failed") { ?>
    <div class='alert alert-warning alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-ban'></i> Alert!</h4>
        Gagal! Mengubah Data 
    </div>
<?php } else if ($_SESSION['message'] == "delete-success") { ?>
    <div class='alert alert-info alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-ban'></i> Alert!</h4>
        Sukses! Menghapus Data
    </div>
<?php } else if ($_SESSION['message'] == "delete-failed") { ?>
    <div class='alert alert-danger alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-ban'></i> Alert!</h4>
        Gagal! Menghapus Data
    </div>
<!-------------------------------------------------------------------------------------------------->
<?php } else if ($_SESSION['message'] == "login-success") { ?>
    <div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-ban'></i> Alert!</h4>
        Sukses Login!
    </div>
<?php } else if($_SESSION['message'] == "wrong-password") { ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Password Salah!
    </div>
<?php } else if($_SESSION['message'] == "logout-success") { ?>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Sukses Logout!
    </div>
<?php } else if($_SESSION['message'] == "invalid-email") { ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Email Tidak Terdaftar!
    </div>
<?php } } $_SESSION['message'] = ""; ?>