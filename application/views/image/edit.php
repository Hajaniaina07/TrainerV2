<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Image Edit</h3>
            </div>
			<?php echo form_open('image/edit/'.$image['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1" <?php echo ($image['STATUT']==1 ? 'checked="checked"' : ''); ?> id='STATUT' />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="DOSSIER" class="control-label">DOSSIER</label>
						<div class="form-group">
							<input type="text" name="DOSSIER" value="<?php echo ($this->input->post('DOSSIER') ? $this->input->post('DOSSIER') : $image['DOSSIER']); ?>" class="form-control" id="DOSSIER" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM" class="control-label">NOM</label>
						<div class="form-group">
							<input type="text" name="NOM" value="<?php echo ($this->input->post('NOM') ? $this->input->post('NOM') : $image['NOM']); ?>" class="form-control" id="NOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ALT" class="control-label">ALT</label>
						<div class="form-group">
							<input type="text" name="ALT" value="<?php echo ($this->input->post('ALT') ? $this->input->post('ALT') : $image['ALT']); ?>" class="form-control" id="ALT" />
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