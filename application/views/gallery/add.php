<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Gallery Add</h3>
            </div>
            <?php echo form_open('gallery/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="IDIMAGE" class="control-label">IDIMAGE</label>
						<div class="form-group">
							<input type="text" name="IDIMAGE" value="<?php echo $this->input->post('IDIMAGE'); ?>" class="form-control" id="IDIMAGE" />
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