<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Message Edit</h3>
            </div>
			<?php echo form_open('message/edit/'.$message['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="LUE" value="1" <?php echo ($message['LUE']==1 ? 'checked="checked"' : ''); ?> id='LUE' />
							<label for="LUE" class="control-label">LUE</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1" <?php echo ($message['STATUT']==1 ? 'checked="checked"' : ''); ?> id='STATUT' />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM" class="control-label">NOM</label>
						<div class="form-group">
							<input type="text" name="NOM" value="<?php echo ($this->input->post('NOM') ? $this->input->post('NOM') : $message['NOM']); ?>" class="form-control" id="NOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PRENOM" class="control-label">PRENOM</label>
						<div class="form-group">
							<input type="text" name="PRENOM" value="<?php echo ($this->input->post('PRENOM') ? $this->input->post('PRENOM') : $message['PRENOM']); ?>" class="form-control" id="PRENOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="EMAIL" class="control-label">EMAIL</label>
						<div class="form-group">
							<input type="text" name="EMAIL" value="<?php echo ($this->input->post('EMAIL') ? $this->input->post('EMAIL') : $message['EMAIL']); ?>" class="form-control" id="EMAIL" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SUJET" class="control-label">SUJET</label>
						<div class="form-group">
							<input type="text" name="SUJET" value="<?php echo ($this->input->post('SUJET') ? $this->input->post('SUJET') : $message['SUJET']); ?>" class="form-control" id="SUJET" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CONTENUE" class="control-label">CONTENUE</label>
						<div class="form-group">
							<textarea name="CONTENUE" class="form-control" id="CONTENUE"><?php echo ($this->input->post('CONTENUE') ? $this->input->post('CONTENUE') : $message['CONTENUE']); ?></textarea>
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