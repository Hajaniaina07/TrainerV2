<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categorie Edit</h3>
            </div>
			<?php echo form_open('categorie/edit/'.$categorie['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1" <?php echo ($categorie['STATUT']==1 ? 'checked="checked"' : ''); ?> id='STATUT' />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM" class="control-label">NOM</label>
						<div class="form-group">
							<input type="text" name="NOM" value="<?php echo ($this->input->post('NOM') ? $this->input->post('NOM') : $categorie['NOM']); ?>" class="form-control" id="NOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="AGEMIN" class="control-label">AGEMIN</label>
						<div class="form-group">
							<input type="text" name="AGEMIN" value="<?php echo ($this->input->post('AGEMIN') ? $this->input->post('AGEMIN') : $categorie['AGEMIN']); ?>" class="form-control" id="AGEMIN" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="AGEMAX" class="control-label">AGEMAX</label>
						<div class="form-group">
							<input type="text" name="AGEMAX" value="<?php echo ($this->input->post('AGEMAX') ? $this->input->post('AGEMAX') : $categorie['AGEMAX']); ?>" class="form-control" id="AGEMAX" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DESCRIPTION" class="control-label">DESCRIPTION</label>
						<div class="form-group">
							<textarea name="DESCRIPTION" class="form-control" id="DESCRIPTION"><?php echo ($this->input->post('DESCRIPTION') ? $this->input->post('DESCRIPTION') : $categorie['DESCRIPTION']); ?></textarea>
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