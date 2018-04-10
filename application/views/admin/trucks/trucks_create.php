
      <div class="row">
          <!-- general form elements disabled -->
     <div class="col-md-4 col-xs-12 col-sm-12">
          <div class="box box-warning">
            <div class="box-header with-border">
            <!--
              <h3 class="box-title">General Elements</h3>
            -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <?=form_open()?>
             <div class="form-group">
	   			 <?= show_alerts(@$alert) ?>
	   		</div>
                <!-- input states -->
                <div class="form-group">
                  <label class="control-label" for="plateNumber"><i class="fa fa-check"></i>Truck Plate Number</label>
                  <input type="text" value="<?=set_value('plateNumber')?>" class="form-control" name="plateNumber" id="plateNumber" placeholder="Enter ...">
                  <span class="help-block">This is for adding plate number of truct.</span>
                </div>

                <?php if(form_error('plateNumber')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('plateNumber') ?> </label>
                </div>
                <?php } ?>

                <div class="form-group">
                  <label class="control-label" for="truckModel"><i class="fa fa-check"></i>Truck Model</label>
                  <input type="text" value="<?=set_value('truckModel')?>" class="form-control" name="truckModel" id="truckModel" placeholder="Enter ...">
                  <span class="help-block">This is for adding model of truct.</span>
                </div>

                <?php if(form_error('truckModel')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i> 
                <label> <?= form_error('truckModel') ?> </label>
                </div>
                <?php } ?>

                <button type="submit" class="btn btn-success">Create</button>

                <?=form_close()?>
            </div>
            <!-- /.box-body -->
        </div>
      </div>
      <!-- /.row -->

    <div class="col-md-8 col-xs-12 col-sm-12">
        <table class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                  <th>Plate Number</th>
                  <th>Truck Model</th>
                  <th>Date Created</th>
                </tr>
                </thead>
                <tbody>
        <?php if(!empty($listTrucks)): ?>
            <?php foreach($listTrucks as $list){ ?>
                <tr>
                <td><?=$list->plate_num?></td>
                <td><?=$list->truck_model?></td>
                <td><?=date('Y-M-d', time($list->dateCreated))?></td>   
                </tr>
            <?php } ?>
        <?php endif; ?>
        </tbody>
        </table>
    </div>


      </div>