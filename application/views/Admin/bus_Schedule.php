<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
           <h2>Manage Bus Schedule <a type="button" class = "btn btn-info btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Add Schedule</a></h2>
        </div>
        <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bus Number</th>
                    <th>Start Location</th>
                    <th>End Location</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                 foreach($schedules as  $key => $obj){
                  ?> 
                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $obj['bus_number']?></td>
                    <td><?php echo $obj['start_location']?></td>
                    <td><?php
                    $objNew = $this->CM->select_data("bms_location","name",array("id"=>$obj["end"]));
                    echo $objNew[0]['name'];
                    ?></td>
                    <td><?php echo date("d,M,Y",strtotime($obj['date']))?></td>
                    <td><?php echo $obj['amount']?></td>
                    <td>
                        <a href="<?php echo base_url("admin/bus_Schedule_edit/".$obj['id'])?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="<?php echo base_url("admin/bus_Schedule_delete/".$obj['id'])?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="database_operation_from" method="post" data-url="<?php echo base_url('admin/bus_Schedule')?>">
        <div class="form-group">
            <label>Bus Number</label>
            <input type="text"name="bus_number" required class="form-control" placeholder="Enter Bus Number"/>
        </div>
        <div class="form-group">
            <label >Start Location</label>
            <select name="start" required class="form-control">
               <option value="">Select Start</option>
               <?php
               foreach($locations as $loc){
               ?>
               <option value ="<?php echo $loc['id'] ?>"><?php echo $loc['name']?></option>
                <?php
               }
               ?>
            </select>
            <!-- <input type="text"name="name" required class="form-control" placeholder="Enter Start Location"/> -->
        </div>
        <div class="form-group">
            <label>End Location</label>
            <select name="end" required class="form-control" style="color: black;">
               <option value="">Select End</option>
               <?php
               foreach($locations as $loc){
               ?>
               <option value ="<?php echo $loc['id'] ?>"><?php echo $loc['name']?></option>
                <?php
               }
               ?>
            </select>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date"name="date" required class="form-control"/>
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="text"name="amount" required class="form-control" placeholder="Enter Amount"/>
        </div>
        <div class="form-group">
            <button class="btn btn-info float-right">Add Location</button>
        </div>
       </form>
      </div>
    </div>
  </div>
</div>
