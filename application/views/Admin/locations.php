<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
           <h2>Manage Locations <a type="button" class = "btn btn-info btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Add new</a></h2>
        </div>
        <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
          <tbody>
            <?php 
            foreach($locations as $key => $location){
            ?>
                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $location['name']?></td>
                    <td><input type="checkbox" data-url="<?php echo base_url("admin/location_status/".$location['id'])?>" id="location_<?php echo $location['id']?>" data-selector="location_<?php echo $location['id']?>" class="manage_status"<?php if($location["status"]==1){ echo "checked";}?> />Active</td>
                    <td><a href="<?php echo base_url("admin/delete_location/".$location['id'])?>" class="btn btn-danger btn-sm">Delete</a> &nbsp; 
                    <a href="<?php echo base_url("admin/update_location/".$location['id'])?>" class="btn btn-info btn-sm">Upadate</a></td>
                    
                </tr>
                <?php
                } 
                ?>
            </tbody> 
        </table>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="database_operation_from" method="post" data-url="<?php echo base_url('admin/locations/insert')?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"name="name" required class="form-control" placeholder="Enter Location"/>
        </div>
        <div class="form-group">
            <button class="btn btn-info">Add Location</button>
        </div>
       </form>
      </div>
    </div>
  </div>
</div>
