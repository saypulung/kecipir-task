<div class="box">
    <div class="box-header">
    </div>
    <?php echo form_open("admin/karyawan/karyawan_create",array('role'=>'form'));?>
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-12"><?php echo $message;?></div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="inputEmail3" class="control-label">Nama</label>
                
                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
                
              </div>
              <div class="form-group">
                <label for="inputEmail8" class="control-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="inputEmail8" placeholder="Alamat"></textarea>
              </div>
              <div class="form-group">
                <label for="inputEmail6" class="control-label">No Telp</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="telp" class="form-control" id="inputEmail6" placeholder="No Telp">
                  
                </div>
                
              </div>
              <div class="form-group">
                <label for="inputEmail7" class="control-label">Tanggal Lahir</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_lahir" class="form-control datepicker" id="inputEmail7" placeholder="Tanggal Lahir">
                  
                  
                </div>
                
              </div>
              
            </div>
        </div>

        
    </div>
    <div class="box-footer">
          <div class="row">
            <div class="col-md-12">
            <?php echo form_button( array('type'=>'submit', 'content'=>'Simpan','class'=>'btn btn-primary'));?>
            <?php echo anchor('admin/karyawan', 'Back',array('class'=>'btn btn-warning pull-right'))?>
            </div>
        </div>
        </div>
      <?php echo form_close();?>
</div>


