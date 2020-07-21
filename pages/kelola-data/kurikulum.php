<?php include '../static/top.php'; ?>
    <div class="box">
        <div class="box-header">
            <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button> <button class="btn btn-info btn-sm"><i class="fa fa-print"></i></button></div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">No</th>
                        <th rowspan="2" style="vertical-align: middle;">Kode</th>
                        <th rowspan="2" style="vertical-align: middle;">Mata Kuliah</th>
                        <th rowspan="2" style="vertical-align: middle;">Semester</th>
                        <th colspan="2" >SKS</th>
                        <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                        <th rowspan="2" style="vertical-align: middle;">File</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th>Teori</th>
                        <th>Lab</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->show() != null) {
                            foreach($db->show() as $show) {
                    ?>
                    <tr>
                        <td width="4%"><?php echo $no++; ?></td>
                        <td><?php echo $show['kode_matakuliah']; ?></td>
                        <td><?php echo $show['matakuliah']; ?></td>
                        <td><?php echo $show['semester']; ?></td>
                        <td><?php echo $show['sks_teori']; ?></td>
                        <td><?php echo $show['sks_lab']; ?></td>
                        <td><?php echo $show['jenis']; ?></td>
                        <td width="5%">
                        	<button class="btn btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
                        </td>
                        <td width="6%">
                        	<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit-<?php echo $show['id']; ?>"><i class="fa fa-edit"></i></button>
                        	<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $show['id']; ?>"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>  
                    <?php 
                            }
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">No</th>
                        <th rowspan="2" style="vertical-align: middle;">Kode</th>
                        <th rowspan="2" style="vertical-align: middle;">Mata Kuliah</th>
                        <th rowspan="2" style="vertical-align: middle;">Semester</th>
                        <th>Teori</th>
                        <th>Lab</th>
                        <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                        <th rowspan="2" style="vertical-align: middle;">File</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th colspan="2">SKS</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div div class="modal fade" id="save">
    	<div class="modal-dialog modal-lg">
            <div class="modal-content">
	            <div class="modal-header bg-green">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Data</h4> 
                </div>
                <form action="action.php?table=<?php echo $table; ?>&action=store" method="post" class="contact-form">
                    <div class="modal-body">
                        <input name="id_user" type="hidden" value="<?php echo $_SESSION['user']; ?>">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Kode Mata Kuliah</label>
                                    <input type="text" placeholder="Kode" name="kode_matakuliah" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Mata Kuliah</label>
                                    <input type="text" placeholder="Mata Kuliah" name="matakuliah" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Semester</label>
                                    <select name="semester" class="form-control" required>
                                        <option value="">Semester</option>
                                        <?php foreach($semester as $s) { 
                                            echo "<option value='$s'>$s</option>";
                                        } ?>
                                    </select>
                                </div>    
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>SKS Teori</label>
                                    <select name="sks_teori" class="form-control" required>
                                        <option value="">SKS Teori</option>
                                        <?php foreach($sks_teori as $s) { 
                                            echo "<option value='$s'>$s</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>SKS Lab</label>
                                    <select name="sks_lab" class="form-control" required>
                                        <option value="">SKS Lab</option>
                                        <?php foreach($sks_lab as $s) { 
                                            echo "<option value='$s'>$s</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>   
                        </div>
                        <div class="row">      
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select name="jenis" class="form-control" required>
                                        <option value="">Jenis</option>
                                        <?php foreach($jenis as $s) { 
                                            echo "<option value='$s'>$s</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="customFile">File</label>
                                        <input type="file" class="custom-file-input" id="customFile" name="file" required>
                                    </div>
                                </div>
                            </div>    
                        </div>
               	    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        if($db->show() != null) {
            foreach($db->show() as $show) {
    ?>
    <div div class="modal fade" id="edit-<?php echo $show['id']; ?>">
    	<div class="modal-dialog modal-lg">
            <div class="modal-content">
	            <div class="modal-header bg-yellow">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Edit Data</h4>
	            </div>
                <form action="action.php?table=<?php echo $table; ?>&action=update" method="post" class="contact-form">
                    <div class="modal-body">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
                        <div class="row">
                            <div class="col-lg-4" >
                                <div class="form-group">
                                    <label>Kode Mata Kuliah</label>
                                    <input type="text" placeholder="Kode Mata Kuliah" name="kode_matakuliah" class="form-control" value="<?php echo $show['kode_matakuliah']; ?>" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Mata Kuliah</label>
                                    <input type="text" placeholder="Mata Kuliah" name="matakuliah" class="form-control" value="<?php echo $show['matakuliah']; ?>" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Semester</label>
                                    <select name="semester" class="form-control" required>
                                        <?php foreach($semester as $s) { 
                                            if($s == $show['semester']) {
                                                echo "<option selected value='$s'>$s</option>";
                                            } else {
                                                echo "<option value='$s'>$s</option>";
                                            }
                                        } ?>
                                    </select>
                                </div>    
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>SKS Teori</label>
                                    <select name="sks_teori" class="form-control" required>
                                        <?php foreach($sks_teori as $s) { 
                                            if($s == $show['sks_teori']) {
                                                echo "<option selected value='$s'>$s</option>";
                                            } else {
                                                echo "<option value='$s'>$s</option>";
                                            }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>SKS Lab</label>
                                    <select name="sks_lab" class="form-control" required>
                                        <?php foreach($sks_lab as $s) { 
                                            if($s == $show['sks_lab']) {
                                                echo "<option selected value='$s'>$s</option>";
                                            } else {
                                                echo "<option value='$s'>$s</option>";
                                            }
                                        } ?>
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <div class="row">       
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select name="jenis" class="form-control" required>
                                        <?php foreach($jenis as $s) { 
                                            if($s == $show['jenis']) {
                                                echo "<option selected value='$s'>$s</option>";
                                            } else {
                                                echo "<option value='$s'>$s</option>";
                                            }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="customFile">File</label>
                                        <input type="file" class="custom-file-input" id="customFile" name="file2">
                                        <div class="form-group">File yang sudah ada : <a href="#"><?php echo $show['file']; ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
               	    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div div class="modal fade" id="delete-<?php echo $show['id']; ?>">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-red">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Delete Data</h4>
	            </div>
                <form action="action.php?table=<?php echo $table; ?>&action=delete" method="post">
                    <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
                    <div class="modal-body">
                       	<p>Apakah anda yakin menghapus data ini?</p>
                   	</div>
    	            <div class="modal-footer">
    	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	                <button type="submit" class="btn btn-danger">Delete</button>
    	            </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
            }
        }
    ?>
<?php include '../static/bot.php'; ?>
