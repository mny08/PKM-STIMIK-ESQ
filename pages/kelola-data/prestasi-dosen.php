<?php include '../static/top.php'; ?>
    <div class="box">
        <div class="box-header">
            <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button> <button class="btn btn-info btn-sm"><i class="fa fa-print"></i></button></div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bidang Keahlian</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
                            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
                    ?>
                    <tr>
                        <td width="4%"><?php echo $no++; ?></td>
                        <td><?php echo $show['bidang_keahlian']; ?></td>
                        <td><?php echo $show['tingkat']; ?></td>
                        <td><?php echo $show['tahun']; ?></td>
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
                        <th>No</th>
                        <th>Bidang Keahlian</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
                        <th>File</th>
                        <th>Action</th>
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
	                <h4 class="modal-title">Modal Tambah</h4>
	            </div>
                <form action="action.php?table=<?php echo $table; ?>&action=store" method="post" class="contact-form">
                    <div class="modal-body">
                        <input name="id_user" type="hidden" value="<?php echo $_SESSION['user']; ?>">
                        <div class="row">
                            <div class="col-lg-12" >
                                <div class="form-group"> 
                                    <label>Bidang Keahlian</label>
                                    <input type="text" placeholder="Bidang Keahlian" name="bidang_keahlian" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select name="tingkat" class="form-control" required>
                                        <option value="">Tingkat</option>
                                        <?php foreach($tingkat as $s) { 
                                            echo "<option value='$s'>$s</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control" required>
                                        <option value="">Tahun</option>
                                        <?php
                                        $s = 2010;
                                        while($s < 2025) {  
                                            echo "<option value='$s'>$s</option>";
                                            $s++;
                                        } ?>
                                    </select>
                                </div>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <label>File</label>
                                    <input type="file" name="file" class="custom-file-input" id="customFile" autocomplete="off" required>
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <label>Image</label>
                                    <input type="file" name="image" class="custom-file-input" id="customFile" autocomplete="off" required>
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
        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
    ?>
    <div div class="modal fade" id="edit-<?php echo $show['id']; ?>">
    	<div class="modal-dialog modal-lg">
            <div class="modal-content">
	            <div class="modal-header bg-yellow">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Modal Edit</h4>
	            </div>
                <form action="action.php?table=<?php echo $table; ?>&action=update" method="post" class="contact-form">
                    <div class="modal-body">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
                        <div class="row">
                            <div class="col-lg-12" >
                                <div class="form-group">
                                    <label>Bidang Keahlian</label>
                                    <input type="text" placeholder="Bidang Keahlian" name="bidang_keahlian" value="<?php echo $show['bidang_keahlian']; ?>" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select name="tingkat" class="form-control" required>
                                        <?php foreach($tingkat as $s) {  
                                            if($s == $show['tingkat']) {
                                                echo "<option selected value='$s'>$s</option>";
                                            } else {
                                                echo "<option value='$s'>$s</option>";
                                            }
                                        } ?>
                                    </select>
                                </div>    
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control" required>
                                        <?php
                                            $s = 2010;
                                            while($s < 2025) {  
                                                if($s == $show['tahun']) {
                                                    echo "<option selected value='$s'>$s</option>";
                                                } else {
                                                    echo "<option value='$s'>$s</option>";
                                                }
                                                $s++;
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <label>File</label>
                                    <input type="file" name="file2" class="custom-file-input" id="customFile">
                                    <div class="form-group">File yang sudah ada : <a href="#"><?php echo $show['file']; ?></a></div>
                                </div>   
                            </div> 
                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <label>Image</label>
                                    <input type="file" name="image2" class="custom-file-input" id="customFile">
                                    <div class="form-group">Image yang sudah ada : <a href="#"><?php echo $show['image']; ?></a></div>
                                </div>   
                            </div> 
                        </div>
                   	</div>
    	            <div class="modal-footer">
    	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	                <button type="submit" class="btn btn-warning">Save changes</button>
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
	                <h4 class="modal-title">Modal Delete</h4>
	            </div>
                <form action="action.php?table=<?php echo $table; ?>&action=delete" method="post">
                    <div class="modal-body">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
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
