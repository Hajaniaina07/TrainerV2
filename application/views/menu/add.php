<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Menu Add</h3>
            </div>
            <?php echo form_open('menu/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1"  id="STATUT" />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM" class="control-label">NOM</label>
						<div class="form-group">
							<input type="text" name="NOM" value="<?php echo $this->input->post('NOM'); ?>" class="form-control" id="NOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="LIENS" class="control-label">LIENS</label>
						<div class="form-group">
							<input type="text" name="LIENS" value="<?php echo $this->input->post('LIENS'); ?>" class="form-control" id="LIENS" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CLASS" class="control-label">CLASS</label>
						<div class="form-group">
							<input type="text" name="CLASS" value="<?php echo $this->input->post('CLASS'); ?>" class="form-control" id="CLASS" />
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