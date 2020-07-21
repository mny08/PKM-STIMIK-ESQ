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
                        <th>Tema</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Integrasi</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
                            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
                                 $show2 = $db2->search_by_id($show['id_matakuliah']);
                    ?>
                    <tr>
                        <td width="4%"><?php echo $no++; ?></td>
                        <td><?php echo $show['tema']; ?></td>
                        <td><?php echo $show['judul']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($show['tanggal']));?></td>
                        <td><?php echo $show['tempat']; ?></td>
                        <td><?php echo $show2['kode_matakuliah'] . " - " . $show2['matakuliah']; ?></td>
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
                        <th>Tema</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Integrasi</th>
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
                    <h4 class="modal-title">Tambah Data</h4> 
                </div>
                <form action="action.php?table=<?php echo $table; ?>&action=store" method="post" class="contact-form">
                    <div class="modal-body">
                        <input name="id_user" type="hidden" value="<?php echo $_SESSION['user']; ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tema</label>
                                    <input type="text" placeholder="Tema" name="tema" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" placeholder="Judul" name="judul" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="deskripsi" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tempat</label>
                                    <input type="text" placeholder="Tempat" name="tempat" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="tanggal" class="form-control pull-right datepicker" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sumber Pembiayaan</label>
                                    <input type="text" placeholder="Sumber Pembiayaan" name="sumber_pembiayaan" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Biaya</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color: rgb(230, 230, 230);">Rp.</span>
                                        <input type="text" name="biaya" placeholder="Biaya" class="form-control money" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Evaluasi</label>
                                    <textarea class="form-control" name="evaluasi" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label for=" Mahasiswa">Mahasiswa yang Terlibat</label>
                                    <div class="form-group input-group">
                                        <input type="text" name="id_mahasiswa" placeholder="Mahasiswa" class="form-control terlibat" autocomplete="off">
                                        <span class="input-group-btn">
                                            <button class="btn btn-flat btn-primary btn-add" type="button">+</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Integrasi</label>
                                    <input type="text" placeholder="Kode Mata Kuliah" name="kode_matakuliah" class="form-control integrasi" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <label>File</label>
                                    <input type="file" class="custom-file-input" name="file" id="customFile" required>
                                </div>   
                            </div>
                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <label>Image</label>
                                    <input type="file" class="custom-file-input" name="image" id="customFile" required>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
                $show2 = $db2->search_by_id($show['id_matakuliah']);
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
                            <div class="col-lg-6" >
                                <div class="form-group">
                                    <label>Tema</label>
                                    <input type="text" placeholder="Tema" name="tema" class="form-control" value="<?php echo $show['tema']; ?>" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" placeholder="Judul" name="judul" class="form-control" value="<?php echo $show['judul']; ?>" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" rows="3" required><?php echo $show['deskripsi']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tempat</label>
                                    <input type="text" placeholder="Tempat" name="tempat" class="form-control" value="<?php echo $show['tempat']; ?>" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="tanggal" class="form-control pull-right datepicker" value="<?php echo $show['tanggal']; ?>" autocomplete="off" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sumber Pembiayaan</label>
                                    <input type="text" placeholder="Sumber Pembiayaan" name="sumber_pembiayaan" class="form-control" value="<?php echo $show['sumber_pembiayaan']; ?>" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Biaya</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color: rgb(230, 230, 230);">Rp.</span>
                                        <input type="text" name="biaya" placeholder="Biaya" class="form-control money" value="<?php echo $show['biaya']; ?>" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Evaluasi</label>
                                    <textarea class="form-control" name="evaluasi" rows="3" required><?php echo $show['evaluasi']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label for=" Mahasiswa">Mahasiswa yang Terlibat</label>
                                    <div class="form-group input-group">
                                        <input type="text" name="id_mahasiswa" placeholder="Mahasiswa" class="form-control terlibat" autocomplete="off">
                                        <span class="input-group-btn">
                                            <button class="btn btn-flat btn-primary btn-add" type="button">+</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Integrasi</label>
                                    <input type="text" placeholder="Kode Mata Kuliah" name="kode_matakuliah" class="form-control integrasi" value="<?php echo $show2['kode_matakuliah'] . " - " . $show2['matakuliah']; ?>" autocomplete="off" required>
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
