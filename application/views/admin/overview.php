<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>

        </div>

        <?php endif; ?>
    <!-- <?php print_r($data);?> -->
    <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/add') ?>"><i class="fas fa-plus"></i> Add Data Checklist</a>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Shift</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $a){?>
                  <tr>
                    <td>
                          <?php echo $a->datenya ?>
                    </td>
                    <td>
                          <?php echo $a->nama ?>
                    </td>
                    <td>
                          <?php echo $a->shift ?>
                    </td>
                    <td width="250">
                      <?php $date=$a->date;
                      $id_engineer=$a->id_engineer;
                      $shift=$a->shift;?>

                      <?php $no=1?>

                      <a href="<?php echo site_url('admin/Overview/detail/'.$date.'/'.$id_engineer.'/'.
                      $shift) ?>" class="btn btn-info btn-sm"

                      data-toggle='modal' data-target='#myModal' id='modal-<?php echo $no?>'>
                      <i class="fas fa-book fa-fw"/></i></a>

                      <a href="<?php echo site_url('admin/Overview/edit/'.$date.'/'.$id_engineer.'/'.
                      $shift) ?>" class="btn btn-info btn-sm"><i class="fas fa-edit fa-fw"></i></a>

                      <a class="btn btn-danger btn-sm" onclick="deleteConfirm('<?php echo site_url('/admin/Overview/delete/'.$date.'/'.$id_engineer.'/'.$shift)?>')"
                      href="#!" class="btn btn-small text-danger"><i class="fas fa-times fa-fw"></i></a>


                      
                        <script type='text/javascript'>
            jQuery(function($){

            $('#modal-<?php echo $no?>').on('click',function(){



            
             $.ajax({
              url: "<?php echo site_url('admin/Overview/detail/'.$date.'/'.$id_engineer.'/'.
                      $shift) ?>",
              type: 'post',
              success: function(response){ 
                $('.modal-body').html(response);

                $('#myModal').modal('show'); 
              }
              });
            });
            });
          </script>
          <?php $no++?>

                    </td>
                  
<?php }?>
                </tbody>




              </table>
            </div>
          </div>
        </div>
      <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<div class="modal fade " id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Daily Checklist Engineer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  




<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>

    
    <script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>
</body>
</html>