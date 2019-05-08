<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contact Info Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contact_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>STATUT</th>
						<th>NOM</th>
						<th>TEXTE</th>
						<th>CLASS</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($contact_info as $C){ ?>
                    <tr>
						<td><?php echo $C['ID']; ?></td>
						<td><?php echo $C['STATUT']; ?></td>
						<td><?php echo $C['NOM']; ?></td>
						<td><?php echo $C['TEXTE']; ?></td>
						<td><?php echo $C['CLASS']; ?></td>
						<td>
                            <a href="<?php echo site_url('contact_info/edit/'.$C['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('contact_info/remove/'.$C['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
