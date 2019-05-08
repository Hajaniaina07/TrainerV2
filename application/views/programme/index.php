<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Programme Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('programme/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>STATUT</th>
						<th>IDCATEGORIE</th>
						<th>IDEXERCICE</th>
						<th>MOMENT</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($programme as $P){ ?>
                    <tr>
						<td><?php echo $P['ID']; ?></td>
						<td><?php echo $P['STATUT']; ?></td>
						<td><?php echo $P['IDCATEGORIE']; ?></td>
						<td><?php echo $P['IDEXERCICE']; ?></td>
						<td><?php echo $P['MOMENT']; ?></td>
						<td>
                            <a href="<?php echo site_url('programme/edit/'.$P['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('programme/remove/'.$P['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
