<?php include '../static/top.php'; ?>
    <div class="row">
    <?php
        $no = 1;
        while($no < 9) {
    ?>
      	<div class="col-lg-6">
            <div class="box">
                <table class="table table-bordered text-center">
                    <thead>
                    	<tr>
                    		<th colspan="5" style="background-color: aqua;">Semester <?php echo $no; ?></th>
                    	</tr>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">Kode</th>
                            <th rowspan="2" style="vertical-align: middle;">Mata Kuliah</th>
                            <th colspan="2" >SKS</th>
                            <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                        </tr>
                        <tr>
                            <th>Teori</th>
                            <th>Lab</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($db->search_by_field('semester' , $no) != null) {
                                foreach($db->search_by_field('semester', $no++) as $show) {
                        ?>
                        <tr>
                            <td width="10%"><a href="#" class="text-black"><?php echo $show['kode_matakuliah']; ?></a></td>
                            <td><a href="#" class="text-black"><?php echo $show['matakuliah']; ?></a></td>
                            <td width="5%"><?php echo $show['sks_teori']; ?></td>
                            <td width="8%"><?php echo $show['sks_lab']; ?></td>
                            <td width="17%"><?php echo $show['jenis']; ?></td>
                        </tr> 
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
<?php include '../static/bot.php'; ?>
