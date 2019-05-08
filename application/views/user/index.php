<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>STATUT</th>
						<th>IDACCES</th>
						<th>USERNAME</th>
						<th>NAISSANCE</th>
						<th>CONTACT</th>
						<th>PASSWORD</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $U){ ?>
                    <tr>
						<td><?php echo $U['ID']; ?></td>
						<td><?php echo $U['STATUT']; ?></td>
						<td><?php echo $U['IDACCES']; ?></td>
						<td><?php echo $U['USERNAME']; ?></td>
						<td><?php echo $U['NAISSANCE']; ?></td>
						<td><?php echo $U['CONTACT']; ?></td>
						<td><?php echo $U['PASSWORD']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$U['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$U['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
