<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Image Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('image/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>STATUT</th>
						<th>DOSSIER</th>
						<th>NOM</th>
						<th>ALT</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($image as $I){ ?>
                    <tr>
						<td><?php echo $I['ID']; ?></td>
						<td><?php echo $I['STATUT']; ?></td>
						<td><?php echo $I['DOSSIER']; ?></td>
						<td><?php echo $I['NOM']; ?></td>
						<td><?php echo $I['ALT']; ?></td>
						<td>
                            <a href="<?php echo site_url('image/edit/'.$I['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('image/remove/'.$I['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
