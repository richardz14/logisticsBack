<div class="row">
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

               <div class="form-group">
                  <label class="control-label" for="userType"><i class="fa fa-check"></i>User Type</label>
                  <input type="text" value="<?=set_value('userType')?>" class="form-control" name="userType" id="userType" placeholder="Enter ...">
                </div>

                <?php if(form_error('userType')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('userType') ?> </label>
                </div>
                <?php } ?>

                <button type="submit" class="btn btn-success">Create</button>

                <?=form_close()?>
            </div>
            <!-- /.box-body -->
        </div>
        </div>

           <div class="col-md-8 col-xs-12 col-sm-12">
          <div class="box box-warning">
            <div class="box-header with-border">
            <!--
              <h3 class="box-title">General Elements</h3>
            -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                  <th>User Type Name</th>
                  <th>User Type Slug</th>
                  <th>Date Created</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
        <?php if(!empty($userTypeList)): ?>
            <?php foreach($userTypeList as $list){ ?>
                <tr>
                <td><?=$list->user_type_name?></td>
                <td><?=$list->user_type_slug?></td>
                <td><?=date('Y-M-d', time($list->created_at))?></td>   
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
            <!-- /.box-body -->
        </div>
        </div>
</div>