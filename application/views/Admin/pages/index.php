 <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
         
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
                <div class="box-tools pull-right">
                 <a href="<?php base_url()?>Admin/add" class="btn btn-block btn-primary">
                   <i class="glyphicon glyphicon-plus"></i> Film
                 </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Film</th>
                  <th>Genre</th>
                  <th>Durasi</th>
                  <th>Tanggal Rilis</th>
                  <th>Bahasa</th>
                  <th>Foto</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
               
                  <?php

                    foreach ($listfilm as $row) {
                      echo'
                         <tr>

                        <td >'.$row['namaFilm'].'</td>
                        <td>'.$row['genre'].'</td>
                        <td>'.$row['durasi'].'</td>
                        <td>'.$row['tgl_rilis'].'</td>
                        <td>'.$row['bahasa'].'</td>
                        <td>
                          <img style="width:10rem" src="'.base_url().'foto/'.$row['poster_film'].'" alt="..." class="img-rounded">
                        </td>
                        <td style="width:100px">
                        <a href="'.base_url().'edit/data/'.$row['id_film'].'" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i></a>
                              <a href="'.base_url().'delete/data/'.$row['id_film'].' ?foto='.$row['poster_film'].' ?foto='.$row['bgimage'].'" onClick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Film Ini?\')" class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i></a></td>
                        </td>

                        </tr>


                      ';
                    }

                  ?>
                 
                  
               
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->