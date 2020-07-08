 <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
         
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
                <div class="box-tools pull-right">
                 <a href="<?php base_url()?>addaktor" class="btn btn-block btn-primary">
                   <i class="glyphicon glyphicon-plus"></i> Aktor
                 </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Umur</th>
                  <th>Foto</th>
                  <th>Action</th>
                 

                </tr>
                </thead>
                <tbody>
               
                  <?php

                    foreach ($listaktor as $row) {
                      echo'
                         <tr>

                        <td >'.$row['nama'].'</td>
                        <td>'.$row['jenis_kl'].'</td>
                        <td>'.$row['tgl_lahir'].'</td>
                        <td>'.$row['umur'].'</td>
                      
                        <td>
                          <img style="width:10rem" src="'.base_url().'foto/'.$row['foto'].'" alt="..." class="img-rounded">
                        </td>
                        <td style="width:100px">
                        <a href="" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i></a>
                              <a href="'.base_url().'admin/deleteAktor/'.$row['id_aktor'].' ?foto='.$row['foto'].'" onClick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Film Ini?\')" class="btn btn-danger btn-sm">
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