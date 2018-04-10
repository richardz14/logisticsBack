<div class="row">
<div class="col-md-12 col-xs-12 col-sm-12">
        <table class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                  <th>Job Name</th>
                  <th>Employee's Name</th>
                  <th>Truck Plate #</th>
                  <th>Job Status</th>
                  <th>Date Created</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
        <?php if(!empty($jobOrderList)): ?>
            <?php foreach($jobOrderList as $list){ ?>
                <tr>
                <td><?=$list->job_name?></td>
                <td><?=$list->emp_fname.' '.$list->emp_lname?></td>
                <td><?=$list->plate_num?></td>
                <td >
                   <h5 style="padding: 5px 5px;margin-top: 1px;" class="alert <?=jobOrderStatus($list->job_status)?>"> <?=strtoupper($list->job_status)?> </h5>
                </td>
                <td><?=date('Y-M-d', time($list->dateCreated))?></td>   
                <td>
                <button class="btn btn-info">View</button>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-warning">Delete</button>
                </td>
                </tr>
            <?php } ?>
        <?php endif; ?>
        </tbody>
        </table>
    </div>

</div>