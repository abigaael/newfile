<?php $__env->startPush('style'); ?>
    <link href="<?php echo e(asset('template/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('template/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('template/assets/plugins/datatables-responsive/css/datatables.responsive.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
    <style type="text/css">
      tfoot {
          display: table-header-group;
      }
      .form-group.required label:after {
        content:"*";
        color:red;
    }
    </style>
 <?php $__env->stopPush(); ?>

 <?php $__env->startSection('content'); ?>
   <?php if(session('sukses')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session('success')); ?>

    </div>
   <?php endif; ?>
 <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- MODAL STICK UP  -->
          <div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header clearfix ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                  </button>
                  <h4 class="p-b-5"><span class="semi-bold">Data Customer</span>
                </div>
                <div class="modal-body">
                  <p class="small-text">Masukkan data</p>
                  <form role="form" id="form-createcustomer" action="<?php echo e(url('/customer/create')); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Nama Customer</label>
                          <input name="nama_customer" type="text" class="form-control" placeholder="Masukkan Nama Customer">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Email</label>
                          <input name="email" type="text" class="form-control" placeholder="Masukkan Email">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Jenis Kelamin</label>
                          <input type="radio" name="jenis_kelamin" value="L"> Laki-laki<br>
                          <input type="radio" name="jenis_kelamin" value="P"> Perempuan<br>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                       <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Alamat</label>
                          <input name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>No Handphone</label>
                          <input name="no_hp" type="number" class="form-control" placeholder="Masukkan no handphone">
                          <span class="no_hp-error error-custom" style="color: red; font-size: 11px;">Mobile number of at least 13 digits</span>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>Kode Customer</label>
                          <input name="kode_customer" type="text" class="form-control" placeholder="Masukkan Kode Customer">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button id="add-app" type="submit" class="btn btn-primary  btn-cons">Add</button>
                      <button type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
                
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div> 
       <div class=" container-fluid   container-fixed-lg bg-white">
 <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg bg-white">
       <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <h1 align="center">List Customer</h1>
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
                <div class="pull-left">
                 <div class="col-xs-12">
                    <button id="show-modal" class="btn btn-primary btn-cons" data-toggle="modal" data-target="#addNewAppModal"><i class="fa fa-plus"></i> Tambah Data
                    </button>
                  </div>
                  </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-block">
                <table class="table table-hover demo-table-search table-responsive" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>Nama Customer</th>
                      <th>Jenis kelamin</th>
                      <th>Alamat</th>
                      <th>No hp</th>
                      <th>Kode customer</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Customer</th>
                      <th>Jenis kelamin</th>
                      <th>Alamat</th>
                      <th>No hp</th>
                      <th>Kode customer</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr> 
                  </tfoot>
                  <tbody>
                    <?php $__currentLoopData = $data_customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($customer->nama_customer); ?></td>
                      <td>
                        <?php if($customer->jenis_kelamin == "L"): ?>
                            Laki-Laki
                          <?php else: ?>
                            Perempuan
                        <?php endif; ?>
                      </td>
                      <td><?php echo e($customer->alamat); ?></td>
                      <td><?php echo e($customer->no_hp); ?></td>
                      <td><?php echo e($customer->kode_customer); ?></td>
                      <td><?php echo e($customer->email); ?></td>
                      <td>
                        <a href="/customer/<?php echo e($customer->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                        &nbsp;&nbsp;
                        <a href="/customer/<?php echo e($customer->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
          <!-- END CONTAINER FLUID -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/assets/plugins/datatables-responsive/js/datatables.responsive.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/assets/plugins/datatables-responsive/js/lodash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/js/datatables.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('template/assets/plugins/jquery-validation/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>

    <script type="text/javascript">

      $(document).ready(function() {
          // Setup - add a text input to each footer cell
          $('#tableWithSearch tfoot th').each( function () {
              var title = $(this).text();
              $(this).html( '<input type="text" placeholder=" '+title+'" />' );
          } );
       
          // DataTable
          var table = $('#tableWithSearch').DataTable();
       
          // Apply the search
          table.columns().every( function () {
              var that = this;
       
              $( 'input', this.footer() ).on( 'keyup change clear', function () {
                  if ( that.search() !== this.value ) {
                      that
                          .search( this.value )
                          .draw();
                  }
              } );
          } );

          $("#form-createcustomer").validate({
            rules: {
              email:{
                    required: true,
                    remote: {
                              url:"<?php echo e(url('/emailunique')); ?>",
                              type:"get",
                    },
              }, 
              nama_customer: "required",
              jenis_kelamin:"required",
              alamat:"required",
              no_hp:"required",
              kode_customer:{
                  required: true,
                  remote: {
                            url:"<?php echo e(url('/uniquecust')); ?>",
                            type:"get",
                  },
              },
            },
            messages: {
              nama_customer: "custom message validation",
              email: {
                    required:"Please enter your email address to contact you",
                    email:"Your email address must be in the format of name @",
                    remote:"The email you entered is already in use"
              },
              jenis_kelamin: "custom message validation",
              alamat: "custom message validation",
              no_hp: "custom message validation",
              kode_customer: {
                    required: "Please input customer code",
                    remote: "Please input another code",
              },
            }
          });

      } );

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\file\resources\views/customer/listcustomer.blade.php ENDPATH**/ ?>