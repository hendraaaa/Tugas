 <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
         
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
                 <div class="box-tools pull-right">
                 <button class="btn btn-block btn-primary">
                   <i class="glyphicon glyphicon-plus"></i> Film
                 </button>
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