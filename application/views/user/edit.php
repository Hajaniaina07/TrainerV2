<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1" <?php echo ($user['STATUT']==1 ? 'checked="checked"' : ''); ?> id='STATUT' />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="IDACCES" class="control-label">IDACCES</label>
						<div class="form-group">
							<input type="text" name="IDACCES" value="<?php echo ($this->input->post('IDACCES') ? $this->input->post('IDACCES') : $user['IDACCES']); ?>" class="form-control" id="IDACCES" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="USERNAME" class="control-label">USERNAME</label>
						<div class="form-group">
							<input type="text" name="USERNAME" value="<?php echo ($this->input->post('USERNAME') ? $this->input->post('USERNAME') : $user['USERNAME']); ?>" class="form-control" id="USERNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NAISSANCE" class="control-label">NAISSANCE</label>
						<div class="form-group">
							<input type="text" name="NAISSANCE" value="<?php echo ($this->input->post('NAISSANCE') ? $this->input->post('NAISSANCE') : $user['NAISSANCE']); ?>" class="has-datepicker form-control" id="NAISSANCE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CONTACT" class="control-label">CONTACT</label>
						<div class="form-group">
							<input type="text" name="CONTACT" value="<?php echo ($this->input->post('CONTACT') ? $this->input->post('CONTACT') : $user['CONTACT']); ?>" class="form-control" id="CONTACT" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PASSWORD" class="control-label">PASSWORD</label>
						<div class="form-group">
							<textarea name="PASSWORD" class="form-control" id="PASSWORD"><?php echo ($this->input->post('PASSWORD') ? $this->input->post('PASSWORD') : $user['PASSWORD']); ?></textarea>
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