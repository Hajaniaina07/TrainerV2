<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Acce Edit</h3>
            </div>
			<?php echo form_open('acce/edit/'.$acce['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="NOM" class="control-label">NOM</label>
						<div class="form-group">
							<input type="text" name="NOM" value="<?php echo ($this->input->post('NOM') ? $this->input->post('NOM') : $acce['NOM']); ?>" class="form-control" id="NOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NIVEAU" class="control-label">NIVEAU</label>
						<div class="form-group">
							<input type="text" name="NIVEAU" value="<?php echo ($this->input->post('NIVEAU') ? $this->input->post('NIVEAU') : $acce['NIVEAU']); ?>" class="form-control" id="NIVEAU" />
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