<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Message Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('message/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>LUE</th>
						<th>STATUT</th>
						<th>NOM</th>
						<th>PRENOM</th>
						<th>EMAIL</th>
						<th>SUJET</th>
						<th>CONTENUE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($message as $M){ ?>
                    <tr>
						<td><?php echo $M['ID']; ?></td>
						<td><?php echo $M['LUE']; ?></td>
						<td><?php echo $M['STATUT']; ?></td>
						<td><?php echo $M['NOM']; ?></td>
						<td><?php echo $M['PRENOM']; ?></td>
						<td><?php echo $M['EMAIL']; ?></td>
						<td><?php echo $M['SUJET']; ?></td>
						<td><?php echo $M['CONTENUE']; ?></td>
						<td>
                            <a href="<?php echo site_url('message/edit/'.$M['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('message/remove/'.$M['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
