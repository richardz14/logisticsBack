<div class="row">
<div class="col-md-12 col-xs-12 col-sm-12">
        <table class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <td>Date of Birth</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
        <?php if(!empty($employeeList)): ?>
            <?php foreach($employeeList as $list){ ?>
                <tr>
                <td><?=$list->emp_fname?></td>
                <td><?=$list->emp_lname?></td>
                <td><?=$list->emp_mname?></td>
                <td><?=date('Y-M-d', time($list->dob))?></td>   
                <td>
                <button class="btn btn-info">Edit</button>
                <button class="btn btn-warning">Delete</button>
                </td>
                </tr>
            <?php } ?>
        <?php endif; ?>
        </tbody>
        </table>
    </div>

</div>