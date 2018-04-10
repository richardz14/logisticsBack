<div class="row">
<div class="col-md-12 col-xs-12 col-sm-12">
        <table class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                  <th>Plate Number</th>
                  <th>Truck Model</th>
                  <th>Date Created</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
        <?php if(!empty($listTrucks)): ?>
            <?php foreach($listTrucks as $list){ ?>
                <tr>
                <td><?=$list->plate_num?></td>
                <td><?=$list->truck_model?></td>
                <td><?=date('Y-M-d', time($list->dateCreated))?></td>   
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