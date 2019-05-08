<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1"  id="STATUT" />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="IDACCES" class="control-label">IDACCES</label>
						<div class="form-group">
							<input type="text" name="IDACCES" value="<?php echo $this->input->post('IDACCES'); ?>" class="form-control" id="IDACCES" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="USERNAME" class="control-label">USERNAME</label>
						<div class="form-group">
							<input type="text" name="USERNAME" value="<?php echo $this->input->post('USERNAME'); ?>" class="form-control" id="USERNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NAISSANCE" class="control-label">NAISSANCE</label>
						<div class="form-group">
							<input type="text" name="NAISSANCE" value="<?php echo $this->input->post('NAISSANCE'); ?>" class="has-datepicker form-control" id="NAISSANCE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CONTACT" class="control-label">CONTACT</label>
						<div class="form-group">
							<input type="text" name="CONTACT" value="<?php echo $this->input->post('CONTACT'); ?>" class="form-control" id="CONTACT" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PASSWORD" class="control-label">PASSWORD</label>
						<div class="form-group">
							<textarea name="PASSWORD" class="form-control" id="PASSWORD"><?php echo $this->input->post('PASSWORD'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>