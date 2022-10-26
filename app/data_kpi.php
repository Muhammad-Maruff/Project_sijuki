<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Deskripsi KPI</th>
                    <th>Satuan KPI</th>
                    <th>Kategori Satuan</th>
                    <th>Tipe KPI</th>
                    <th>Tipe Target</th>
                    <th>Polaritas</th>
                    <th>Jabatan Pemilik KPI</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
            
              //persiapan menampilkan data
              $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * FROM tb_data order by id_data asc");
            while($data = mysqli_fetch_array($tampil)) :
            ?>

<tr>
              <td><?= $data['id_data'] ?></td>
              <td><?= $data['deskripsi'] ?></td>
              <td><?= $data['satuan'] ?></td>
              <td><?= $data['kategori_satuan'] ?></td>
              <td><?= $data['tipe_kpi'] ?></td>
              <td><?= $data['tipe_target'] ?></td>
              <td><?= $data['polaritas'] ?></td>
              <td><?= $data['divisi'] ?></td>
              <td>
                <a href="#" class="btn btn-view">View</a>
                <a href="edit.php?hal=edit&id=<?=$data['id_data']?>" class="btn btn-warning">Edit</a>

                <a href="#?>" class="btn btn-danger">Hapus</a>

              </td>
            </tr>
            <?php endwhile; ?>

                  </thead>
                  <tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->