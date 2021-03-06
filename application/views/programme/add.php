<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Programme Add</h3>
            </div>
            <?php echo form_open('programme/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1"  id="STATUT" />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="IDCATEGORIE" class="control-label">IDCATEGORIE</label>
						<div class="form-group">
							<input type="text" name="IDCATEGORIE" value="<?php echo $this->input->post('IDCATEGORIE'); ?>" class="form-control" id="IDCATEGORIE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IDEXERCICE" class="control-label">IDEXERCICE</label>
						<div class="form-group">
							<input type="text" name="IDEXERCICE" value="<?php echo $this->input->post('IDEXERCICE'); ?>" class="form-control" id="IDEXERCICE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="MOMENT" class="control-label">MOMENT</label>
						<div class="form-group">
							<input type="text" name="MOMENT" value="<?php echo $this->input->post('MOMENT'); ?>" class="has-datetimepicker form-control" id="MOMENT" />
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