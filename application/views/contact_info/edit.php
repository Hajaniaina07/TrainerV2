<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Contact Info Edit</h3>
            </div>
			<?php echo form_open('contact_info/edit/'.$contact_info['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="STATUT" value="1" <?php echo ($contact_info['STATUT']==1 ? 'checked="checked"' : ''); ?> id='STATUT' />
							<label for="STATUT" class="control-label">STATUT</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM" class="control-label">NOM</label>
						<div class="form-group">
							<input type="text" name="NOM" value="<?php echo ($this->input->post('NOM') ? $this->input->post('NOM') : $contact_info['NOM']); ?>" class="form-control" id="NOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="TEXTE" class="control-label">TEXTE</label>
						<div class="form-group">
							<input type="text" name="TEXTE" value="<?php echo ($this->input->post('TEXTE') ? $this->input->post('TEXTE') : $contact_info['TEXTE']); ?>" class="form-control" id="TEXTE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CLASS" class="control-label">CLASS</label>
						<div class="form-group">
							<input type="text" name="CLASS" value="<?php echo ($this->input->post('CLASS') ? $this->input->post('CLASS') : $contact_info['CLASS']); ?>" class="form-control" id="CLASS" />
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