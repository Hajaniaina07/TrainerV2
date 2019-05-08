<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categorieprogram Edit</h3>
            </div>
			<?php echo form_open('categorieprogram/edit/'.$categorieprogram['IDCATEGORIE']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1" <?php echo ($categorieprogram['STATUT']==1 ? 'checked="checked"' : ''); ?> id='STATUT' />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="REPETITION" class="control-label">REPETITION</label>
						<div class="form-group">
							<input type="text" name="REPETITION" value="<?php echo ($this->input->post('REPETITION') ? $this->input->post('REPETITION') : $categorieprogram['REPETITION']); ?>" class="form-control" id="REPETITION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="MIN" class="control-label">MIN</label>
						<div class="form-group">
							<input type="text" name="MIN" value="<?php echo ($this->input->post('MIN') ? $this->input->post('MIN') : $categorieprogram['MIN']); ?>" class="form-control" id="MIN" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="MAX" class="control-label">MAX</label>
						<div class="form-group">
							<input type="text" name="MAX" value="<?php echo ($this->input->post('MAX') ? $this->input->post('MAX') : $categorieprogram['MAX']); ?>" class="form-control" id="MAX" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PAUSE" class="control-label">PAUSE</label>
						<div class="form-group">
							<input type="text" name="PAUSE" value="<?php echo ($this->input->post('PAUSE') ? $this->input->post('PAUSE') : $categorieprogram['PAUSE']); ?>" class="form-control" id="PAUSE" />
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