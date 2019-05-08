<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Gallery Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('gallery/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>IDIMAGE</th>
						<th>DESCRIPTION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($gallery as $G){ ?>
                    <tr>
						<td><?php echo $G['ID']; ?></td>
						<td><?php echo $G['IDIMAGE']; ?></td>
						<td><?php echo $G['DESCRIPTION']; ?></td>
						<td>
                            <a href="<?php echo site_url('gallery/edit/'.$G['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('gallery/remove/'.$G['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
