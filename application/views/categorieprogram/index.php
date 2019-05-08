<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categorieprogram Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('categorieprogram/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IDCATEGORIE</th>
						<th>IDEXERCICE</th>
						<th>STATUT</th>
						<th>REPETITION</th>
						<th>MIN</th>
						<th>MAX</th>
						<th>PAUSE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categorieprogram as $C){ ?>
                    <tr>
						<td><?php echo $C['IDCATEGORIE']; ?></td>
						<td><?php echo $C['IDEXERCICE']; ?></td>
						<td><?php echo $C['STATUT']; ?></td>
						<td><?php echo $C['REPETITION']; ?></td>
						<td><?php echo $C['MIN']; ?></td>
						<td><?php echo $C['MAX']; ?></td>
						<td><?php echo $C['PAUSE']; ?></td>
						<td>
                            <a href="<?php echo site_url('categorieprogram/edit/'.$C['IDCATEGORIE']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('categorieprogram/remove/'.$C['IDCATEGORIE']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
