<aside class="main-sidebar">
   <section class="sidebar">
    <?php 
      if(isset($_SESSION['user'])) {
    ?>
     <div class="user-panel">
       <div class="pull-left image">
         <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
       </div>
       <div class="pull-left info">
         <p><?php echo $_SESSION['nama']; ?></p>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <?php
      }
    ?>
     <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <ul class="sidebar-menu">
      <li>
        <a href="../../connector.php?page=dashboard">
          <i class="fa fa-dashboard"></i> Dashboard
        </a>
      </li>
      <?php
        if(isset($_SESSION['level'])) {
          if($_SESSION['page']=='kelola') {
            echo "<li class='treeview active'>";
          } else { 
            echo "<li class='treeview'>";
          }
      ?>
        <a href="#">
          <i class="fa fa-edit"></i>
          <span>Kelola Data</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <?php
            if($_SESSION['level'] == '1') {
              if($_SESSION['subpage']=='kurikulum') {
                  echo "<li class='active'><a href='../../connector.php?page=kelola-kurikulum'><i class='fa fa-circle-o'></i> Data Kurikulum</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-kurikulum'><i class='fa fa-circle-o'></i> Data Kurikulum</a></li>";
              }
          ?>
          <?php
            } if($_SESSION['level'] == '2') {
              if($_SESSION['page']=='kelola' && $_SESSION['subpage']=='prestasi-dosen') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-prestasi-dosen'><i class='fa fa-circle-o'></i> Data Prestasi Dosen</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-prestasi-dosen'><i class='fa fa-circle-o'></i> Data Prestasi Dosen</a></li>";
              }
          ?>
          <?php
            } if($_SESSION['level'] == '3') {
              if($_SESSION['page']=='kelola' && $_SESSION['subpage']=='prestasi-mahasiswa') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-prestasi-mahasiswa'><i class='fa fa-circle-o'></i> Data Prestasi Mahasiswa</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-prestasi-mahasiswa'><i class='fa fa-circle-o'></i> Data Prestasi Mahasiswa</a></li>";
              }
          ?>
          <?php
            } if($_SESSION['level'] == '2') {
              if($_SESSION['subpage']=='pengabdian-masyarakat') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-pengabdian-masyarakat'><i class='fa fa-circle-o'></i> Data Pengabdian Masyarakat</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-pengabdian-masyarakat'><i class='fa fa-circle-o'></i> Data Pengabdian Masyarakat</a></li>";
              }
          ?>
          <?php
              if($_SESSION['subpage']=='penelitian') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-penelitian'><i class='fa fa-circle-o'></i> Data Penelitian</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-penelitian'><i class='fa fa-circle-o'></i> Data Penelitian</a></li>";
              }
          ?>
          <?php
              if($_SESSION['subpage']=='hasil-kerjasama') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-hasil-kerjasama'><i class='fa fa-circle-o'></i> Data Hasil Kerjasama</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-hasil-kerjasama'><i class='fa fa-circle-o'></i> Data Hasil Kerjasama</a></li>";
              }
            }
          ?>
        </ul>
      </li>
      <?php
        } if($_SESSION['page']=='kurikulum') {
          echo "<li class='active'><a href='../../connector.php?page=kurikulum'><i class='fa fa-table'></i> Kurikulum</a></li>";
        } else { 
          echo "<li><a href='../../connector.php?page=kurikulum'><i class='fa fa-table'></i> Kurikulum</a></li>";
        }
      ?>
      <?php
        if($_SESSION['page']=='public') {
          echo "<li class='treeview active'>";
        } else { 
          echo "<li class='treeview'>";
        }
      ?>
        <a href="#">
          <i class="fa fa-trophy"></i>
          <span>Prestasi</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <?php
            if($_SESSION['page']=='public' && $_SESSION['subpage']=='prestasi-dosen') {
              echo "<li class='active'><a href='../../connector.php?page=prestasi-dosen'><i class='fa fa-circle-o'></i> Prestasi Dosen</a></li>";
            } else { 
              echo "<li><a href='../../connector.php?page=prestasi-dosen'><i class='fa fa-circle-o'></i> Prestasi Dosen</a></li>";
            }
          ?>
          <?php
            if($_SESSION['page']=='public' && $_SESSION['subpage']=='prestasi-mahasiswa') {
              echo "<li class='active'><a href='../../connector.php?page=prestasi-mahasiswa'><i class='fa fa-circle-o'></i> Prestasi Mahasiswa</a></li>";
            } else { 
              echo "<li><a href='../../connector.php?page=prestasi-mahasiswa'><i class='fa fa-circle-o'></i> Prestasi Mahasiswa</a></li>";
            }
          ?>
        </ul>
      </li>
      <?php
        if($_SESSION['page']=='pengabdian-masyarakat') {
          echo "<li class='active'><a href='../../connector.php?page=pengabdian-masyarakat'><i class='fa fa-users'></i> Pengabdian Masyarakat</a></li>";
        } else { 
          echo "<li><a href='../../connector.php?page=pengabdian-masyarakat'><i class='fa fa-users'></i> Pengabdian Masyarakat</a></li>";
        }
      ?>
      <?php
        if($_SESSION['page']=='penelitian') {
          echo "<li class='active'><a href='../../connector.php?page=penelitian'><i class='fa fa-book'></i> Penelitian</a></li>";
        } else { 
          echo "<li><a href='../../connector.php?page=penelitian'><i class='fa fa-book'></i> Penelitian</a></li>";
        }
      ?>
      <?php
        if($_SESSION['page']=='hasil-kerjasama') {
          echo "<li class='active'><a href='../../connector.php?page=hasil-kerjasama'><i class='fa fa-gears'></i> Hasil Kerjasama</a></li>";
        } else { 
          echo "<li><a href='../../connector.php?page=hasil-kerjasama'><i class='fa fa-gears'></i> Hasil Kerjasama</a></li>";
        }
      ?>
    </ul>
  </section>
</aside>