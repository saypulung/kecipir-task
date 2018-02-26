<div class="box">
    <div class="box-header">
    </div>
    <?php echo form_open("admin/karyawan/karyawan_update/".$edit['id'],array('role'=>'form'));?>
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-12"><?php echo $message;?></div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="inputEmail3" class="control-label">Nama</label>
                
                    <input type="text" name="nama" value="<?php echo $edit['nama']?>" class="form-control" id="inputEmail3" placeholder="Nama">
                
              </div>
              <div class="form-group">
                <label for="inputEmail8" class="control-label">Alamat</label>
                <textarea name="alamat" class="form-control"  id="inputEmail8" placeholder="Alamat"><?php echo $edit['alamat']?></textarea>
              </div>
              <div class="form-group">
                <label for="inputEmail6" class="control-label">No Telp</label>
                <input value="<?php echo $edit['telp']?>"  type="text" name="telp" class="form-control" id="inputEmail6" placeholder="No Telp">
              </div>
              <div class="form-group">
                <label for="inputEmail7" class="control-label">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" value="<?php echo $edit['tanggal_lahir']?>"  class="form-control datepicker" id="inputEmail7" placeholder="Tanggal Lahir">
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


