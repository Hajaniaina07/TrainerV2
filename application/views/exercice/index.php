<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Exercice Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('exercice/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>STATUT</th>
						<th>IDIMAGE</th>
						<th>NOM</th>
						<th>DESCRIPTION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($exercice as $E){ ?>
                    <tr>
						<td><?php echo $E['ID']; ?></td>
						<td><?php echo $E['STATUT']; ?></td>
						<td><?php echo $E['IDIMAGE']; ?></td>
						<td><?php echo $E['NOM']; ?></td>
						<td><?php echo $E['DESCRIPTION']; ?></td>
						<td>
                            <a href="<?php echo site_url('exercice/edit/'.$E['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('exercice/remove/'.$E['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
