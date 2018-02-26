<div class="box">
    <div class="box-header">
    </div>
    <?php echo form_open("auth/create_group",array('role'=>'form'));?>
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-12"><?php echo $message;?></div>
            <div class="col-md-6">
            	<div class="form-group">
                	<?php echo lang('create_group_name_label', 'group_name');?>
                	<?php echo form_input($group_name,'',array('class'=>'form-control col-md-6'));?>
              	</div>
              	<div class="form-group">
                	<?php echo lang('create_group_desc_label', 'description');?>
                	<?php echo form_input($description,'',array('class'=>'form-control col-md-6'));?>
              	</div>

            </div>
        </div>
    </div>
    <div class="box-footer">
          <div class="row">
            <div class="col-md-12">
            	<?php echo form_button( array('type'=>'submit', 'content'=>lang('create_group_submit_btn'),'class'=>'btn btn-primary'));?>
            	<?php echo anchor('auth/groups', 'Back',array('class'=>'btn btn-warning pull-right'))?>
            </div>
        </div>
    </div>
    <?php echo form_close();?>
</div>


