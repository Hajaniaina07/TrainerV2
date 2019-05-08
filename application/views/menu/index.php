<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Menu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('menu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>STATUT</th>
						<th>NOM</th>
						<th>LIENS</th>
						<th>CLASS</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($menu as $M){ ?>
                    <tr>
						<td><?php echo $M['ID']; ?></td>
						<td><?php echo $M['STATUT']; ?></td>
						<td><?php echo $M['NOM']; ?></td>
						<td><?php echo $M['LIENS']; ?></td>
						<td><?php echo $M['CLASS']; ?></td>
						<td>
                            <a href="<?php echo site_url('menu/edit/'.$M['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('menu/remove/'.$M['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
