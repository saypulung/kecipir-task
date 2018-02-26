<div class="box">
    <div class="box-header">
    </div>
    <?php echo form_open("auth/edit_user/".$user->id,array('role'=>'form'));?>
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-12"><?php echo $message;?></div>
            <div class="col-md-6">
              
              <div class="form-group">
                <?php echo lang('edit_user_fname_label', 'first_name');?>
                <?php echo form_input($first_name,'',array('class'=>'form-control col-md-6'));?>
              </div>
              <div class="form-group">
                <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                <?php echo form_input($last_name,'',array('class'=>'form-control col-md-6'));?>
              </div>
              <?php
              if($identity_column!=='email') {
                ?>
                  <div class="form-group">
                <?php
                  echo lang('edit_user_identity_label', 'identity');
                  echo form_error('identity');
                  echo form_input($identity,'',array('class'=>'form-control col-md-6'));
                ?>
                </div>
                <?php

              }
              ?>
              <div class="form-group">
                <?php echo lang('edit_user_company_label', 'company');?>
                <?php echo form_input($company,'',array('class'=>'form-control col-md-6'));?>
              </div>
              <div class="form-group">
                <?php echo lang('edit_user_email_label', 'email');?> <br />
                <?php echo form_input($email,'',array('class'=>'form-control col-md-6'));?>
              </div>
              <div class="form-group">
                <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                <?php echo form_input($phone,'',array('class'=>'form-control col-md-6'));?>
              </div>
              <?php if ($this->ion_auth->is_admin()): ?>
                <div class="form-group">
                  <label><?php echo lang('edit_user_groups_heading');?>:</label>
                </div>
                  <?php foreach ($groups as $group):?>
                    <div class="form-group">
                    <label class="checkbox">
                    <?php
                        $gID=$group['id'];
                        $checked = null;
                        $item = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked= ' checked="checked"';
                            break;
                            }
                        }
                    ?>
                    <input type="checkbox" class="minimal" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                  </label>
                    </div>
                  <?php endforeach?>
            <?php endif ?>
            <?php echo form_hidden('id', $user->id);?>
            
              <div class="form-group">
                <?php echo lang('edit_user_password_label', 'password');?>
                <?php echo form_input($password,'',array('class'=>'form-control col-md-6'));?>
              </div>
              <div class="form-group">
                <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
                <?php echo form_input($password_confirm,'',array('class'=>'form-control col-md-6'));?>
              </div>
            </div>
        </div>

        
    </div>
    <div class="box-footer">
          <div class="row">
            <div class="col-md-12">
            <?php echo form_button( array('type'=>'submit', 'content'=>lang('edit_user_submit_btn'),'class'=>'btn btn-primary'));?>
            <?php echo anchor('auth/', 'Back',array('class'=>'btn btn-warning pull-right'))?>
            </div>
        </div>
        </div>
      <?php echo form_close();?>
</div>
