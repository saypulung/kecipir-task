<div class="box">
    <div class="box-header">
    </div>
    <?php echo form_open('auth/change_password',array('role'=>'form'));?>
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-12"><?php echo $message;?></div>
            <div class="col-md-6">
                  <div class="form-group">
                  <?php echo lang('change_password_old_password_label', 'old_password');?>
                  <?php echo form_input($old_password,'',array('class'=>'form-control col-md-6'));?>
                  </div>
                  <div class="form-group">
                  <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
                  <?php echo form_input($new_password,'',array('class'=>'form-control col-md-6'));?>
                  </div>
                  <div class="form-group">
                  <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?>
                  <?php echo form_input($new_password_confirm,'',array('class'=>'form-control col-md-6'));?>
                  </div>
                  <?php echo form_input($user_id);?>

            </div>
        </div>
    </div>
    <div class="box-footer">
          <div class="row">
            <div class="col-md-12">
                  <?php echo form_button( array('type'=>'submit', 'content'=>lang('change_password_submit_btn'),'class'=>'btn btn-primary'));?>
                  <?php echo anchor('auth/', 'Back',array('class'=>'btn btn-warning pull-right'))?>
            </div>
        </div>
    </div>
    <?php echo form_close();?>
</div>
