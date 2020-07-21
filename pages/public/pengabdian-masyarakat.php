<?php include '../static/top.php'; ?>
  <div class="row">
      <?php
        $no = 1;
        if($db->show() != null) {
          foreach($db->show() as $show) {
      ?>
      <div class="col-md-3">
        <a href="../../connector.php?page=blog">
          <div class="box">
            <div class="box-header">
              <img src="images.png" alt="Foto" width="100%">
            </div>
            <div class="box-body text-black">
              <h4><b><?php echo $show['judul']; ?></b></h4>
              <p>Sedikit deskripsi untuk menjelaskan isi dari blog ini</p>
            </div>
          </div>
        </a>
      </div>
      <?php
          }
        }
      ?>
  </div>
<?php include '../static/bot.php'; ?>
