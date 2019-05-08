<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">A Propo Add</h3>
            </div>
            <?php echo form_open('a_propo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="NOM" class="control-label">NOM</label>
						<div class="form-group">
							<input type="text" name="NOM" value="<?php echo $this->input->post('NOM'); ?>" class="form-control" id="NOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DESCRIPTION" class="control-label">DESCRIPTION</label>
						<div class="form-group">
							<textarea name="DESCRIPTION" class="form-control" id="DESCRIPTION"><?php echo $this->input->post('DESCRIPTION'); ?></textarea>
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