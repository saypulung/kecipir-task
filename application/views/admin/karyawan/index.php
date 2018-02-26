<div class="box">
    <h3 class="box-title">Data Karyawan</h3>

    <div class="box-body">
        
        <div class="row">
            <div class="col-md-12">

                <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              
              <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="false">[Kotak Sampah]</a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="false">Data Karyawan</a></li>
              <li class="pull-left"></li>
              
            </ul>
            <div class="row">
              <div class="col-md-12" style="margin-bottom: 20px;">
                <a href="<?php echo site_url('admin/karyawan/karyawan_create')?>" class="btn btn-primary btn-sm pull-left"> <i class="fa fa-plus"></i> Create</a>
              </div>
            </div>
            
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                  <div class="row">
                    <div class="col-md-12">
                        <table style="width: 100%"  class="table table-hover table-bordered table-striped" id="<?php echo $script_id?>">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                    </div>
                  </div>
                      
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                <div class="row">
                  <div class="col-md-12">
                    <table style="width: 100%" class="table table-hover table-bordered table-striped" id="<?php echo $script_id_deleted?>">
                      <thead>
                          <tr>
                              <th width="80px">No</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Telepon</th>
                              <th>Tanggal Lahir</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                  </table>
                  </div>
                </div>
                    
              </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
                
            </div>
        </div>
    </div>
</div>
        