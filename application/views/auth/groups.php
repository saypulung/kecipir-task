<div class="box">
    <div class="box-header">
		<div id="infoMessage"><?php echo $message;?></div>
			<p><?php echo anchor('auth/create_group', lang('index_create_group_link'),array('class'=>'btn btn-success pull-right'))?></p>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-bordered table-striped" id="<?php echo $script_id?>">
                	<thead>
						<tr>
							<th width="80px">No</th>
							<th>Group Name</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
            </div>
        </div>
    </div>
</div>
 