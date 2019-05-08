<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Acces Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('acce/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NOM</th>
						<th>NIVEAU</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($acces as $A){ ?>
                    <tr>
						<td><?php echo $A['ID']; ?></td>
						<td><?php echo $A['NOM']; ?></td>
						<td><?php echo $A['NIVEAU']; ?></td>
						<td>
                            <a href="<?php echo site_url('acce/edit/'.$A['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('acce/remove/'.$A['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
