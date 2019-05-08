<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ouverture Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ouverture/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>STATUT</th>
						<th>JOUR</th>
						<th>HEURE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ouverture as $O){ ?>
                    <tr>
						<td><?php echo $O['ID']; ?></td>
						<td><?php echo $O['STATUT']; ?></td>
						<td><?php echo $O['JOUR']; ?></td>
						<td><?php echo $O['HEURE']; ?></td>
						<td>
                            <a href="<?php echo site_url('ouverture/edit/'.$O['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('ouverture/remove/'.$O['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
