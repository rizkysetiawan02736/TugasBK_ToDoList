
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-KETAN</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Tokenfield -->
    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.css"> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >E-KETAN</a>
            </div>
            
            
        </nav>

	
<div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-calendar"></i> To Do List</h1>
                </div>

                <div class="col-lg-12">
                <div style='float: right;' >	
                        <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#myModal">Tambah</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Tambah Kegiatan</h4>
                              </div>

                                    <div class="modal-body">
                                    <!-- Form tambah data obat disini -->
                                    <form action="tambahKegiatan.php" method="post">
                                        <div class="form-group">
                                            <label for="nama_kegiatan">Nama Kegiatan</label>
                                            <input type="text" id="nama_kegiatan" name="nama_kegiatan"  class="form-control" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="tanggal_awal">Tanggal Awal</label>
                                            <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_akhir">Tanggal Akhir</label>
                                            <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" required>
                                        </div>
                                        
                                        
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                    </form>
                                    </div>

                              
                            </div>

                          </div>
                        </div>
	            </div>
	            </div>

                <!-- /.col-lg-12 -->
            </div>
            <br>
               

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <tr align="center" style="font-weight:bold">
                    <td width="5%">No</td>
                    <td>Kegiatan</td>
                    <td>Tanggal Awal</td>
                    <td>Tanggal Akhir</td>
                    <td>Status</td>
                    <td width="20%">aksi</td>
                    <!-- <td width="15%">Aksi</td> -->
                    </tr>

                    <?php
                        include 'koneksi.php';
                        $no = 1;
                        $query = "SELECT * FROM kegiatan";
                        $result = mysqli_query($koneksi, $query);

                        while ($row = mysqli_fetch_array($result)) :

                            ?>


                                    <tr align="center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nama_keg'] ?></td>
                                    <td><?= $row['tgl_awal'] ?></td>
                                    <td><?= $row['tgl_akhir'] ?></td>
                                    <td> <?php
                                        if($row['status'] == 0){
                                            echo '<a class="btn btn-sm btn-danger" >Belum</a>';
                                        } else{
                                            echo '<a class="btn btn-sm btn-success" >Sudah</a>';
                                        }
                                        ?> </td>
                                    <!-- <td><?= $row['status'] ?></td> -->
                                    <!-- <td>
                                        <div class="btn-group" role="group">
                                        <a title="Edit Data" type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEdit<?=$no?>"><i class="fa fa-edit"></i></a>
                                        <a title="Hapus Data" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus<?=$no?>" ><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td> -->
                                    <td>
                                    <div class="btn-group" role="group">
                                        <?php
                                        if($row['status'] == 0){
                                            echo '<a class="btn btn-sm btn-info" href="status.php?id_keg=' . $row['id_keg'] . '&status=1"><i class="fa fa-refresh"></i></a>';
                                        } else{
                                            echo '<a class="btn btn-sm btn-info" href="status.php?id_keg=' . $row['id_keg'] . '&status=0"><i class="fa fa-refresh"></i></a>';
                                        }
                                        ?>
                                        
                                        <a title="Edit Data" type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEdit<?=$no?>"><i class="fa fa-edit"></i></a>
                                        <a title="Hapus Data" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus<?=$no?>" ><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                    </tr>

                                  <!-- Awal Modal Ubah-->
                                  <div class="modal fade" id="modalEdit<?=$no?>" role="dialog">
                                  <div class="modal-dialog">
        
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Ubah Kegiatan</h4>
                                      </div>
        
                                            <div class="modal-body">
                                            <!-- Form ubah data obat disini -->
                                            <form action="updateKegiatan.php" method="post">
                                            <input type="hidden" name="id_kegiatan" value="<?= $row['id_keg']; ?>">
                                                
                                            
                                                <div class="form-group">
                                                    <label for="nama_kegiatan">Nama Kegiatan</label>
                                                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?= $row['nama_keg']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kemasan">Tanggal Awal</label>
                                                    <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" value="<?= $row['tgl_awal']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Tanggal Akhir</label>
                                                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="<?= $row['tgl_akhir']; ?>" required>
                                                </div>
                                                
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                    </div>
                                            </form>
                                            </div>
        
                                      
                                    </div>
        
                                  </div>
                                  </div>
                                  <!-- Akhir Modal Ubah-->

                                  

                                  <!-- Awal Modal Hapus-->
                                  <div class="modal fade" id="modalHapus<?=$no?>" role="dialog">
                                  <div class="modal-dialog">
        
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Hapus Kegiatan</h4>
                                      </div>
        
                                            <div class="modal-body">
                                            <!-- Form ubah data obat disini -->
                                            <form action="hapusKegiatan.php" method="post">
                                            <input type="hidden" name="id" value="<?= $row['id_keg']; ?>">
                                            
                                            <h5 class="text-center"> Apakah anda yakin ingin menghapus data ini? </h5>
                                            <br>
                                            <h5 class="text-center " style="color:red;"><?= $row['nama_keg'] ?></h5>

                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" name="bHapus">Hapus</button>
                                            </div>  
                                            
                                            </form>
                                            </div>

                                          
        
                                      
                                    </div>
        
                                  </div>
                                  </div>
                                  <!-- Akhir Modal Hapus-->





                                    <?php endwhile; ?>

                                



                               
                        
                    






                                
                    </table>
                    
                    
                    

                    

                </div>
            </div>
</div>  
        <!-- /#page-wrapper -->

    



</div>
<!-- /#wrapper -->



<!-- <script>
$('#tokenfield').tokenfield({
  autocomplete: {
    source: ['red','blue','green','yellow','violet','brown','purple','black','white'],
    delay: 100
  },
  showAutocompleteOnFocus: true
})
</script> -->

  <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Tokenfield JS -->
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> -->
    
 

</body>
</html>