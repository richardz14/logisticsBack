<div class="row">
<div class="col-md-12 col-xs-12 col-sm-12">
        <table class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Full Name</th>
                  <th>User Type</th>
                  <th>Date Created</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
        <?php if(!empty($userList)): ?>
            <?php foreach($userList as $list){ ?>
                <tr>
                <td><?=$list->username?></td>
                <td><?=$list->firstname.' '.$list->lastname?></td>
                <td><?=$list->user_type_name?></td>         
                <td><?=date('Y-M-d', time($list->created_at))?></td>   
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