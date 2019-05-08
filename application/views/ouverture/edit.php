<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ouverture Edit</h3>
            </div>
			<?php echo form_open('ouverture/edit/'.$ouverture['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1" <?php echo ($ouverture['STATUT']==1 ? 'checked="checked"' : ''); ?> id='STATUT' />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="JOUR" class="control-label">JOUR</label>
						<div class="form-group">
							<input type="text" name="JOUR" value="<?php echo ($this->input->post('JOUR') ? $this->input->post('JOUR') : $ouverture['JOUR']); ?>" class="form-control" id="JOUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HEURE" class="control-label">HEURE</label>
						<div class="form-group">
							<input type="text" name="HEURE" value="<?php echo ($this->input->post('HEURE') ? $this->input->post('HEURE') : $ouverture['HEURE']); ?>" class="form-control" id="HEURE" />
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