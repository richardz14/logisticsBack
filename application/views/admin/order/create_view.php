<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12">
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
                <label>Employee</label> <br>
               <?=form_dropdown('empOpt',$employeeOption,'',['class' => 'form-control select2','style' => 'width: 100%;'])?>
              </div>
              <?php if(form_error('empOpt')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('empOpt') ?> </label>
                </div>
                <?php } ?>

               <div class="form-group">
                <label>Truck</label> <br>
               <?=form_dropdown('truckOpt',$truckOption,'',['class' => 'form-control select2','style' => 'width: 100%;'])?>
              </div>
              <?php if(form_error('truckOpt')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('truckOpt') ?> </label>
                </div>
                <?php } ?>


                <div class="form-group">
                  <label class="control-label" for="jname"><i class="fa fa-check"></i>Job Name</label>
                  <input type="text" value="<?=set_value('jname')?>" class="form-control" name="jname" id="jname" placeholder="Enter ...">
                </div>

                <?php if(form_error('jname')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('jname') ?> </label>
                </div>
                <?php } ?>

                   <div class="form-group">
                  <label class="control-label" for="jdesc"><i class="fa fa-check"></i>Job Description</label>
                  <input type="text" value="<?=set_value('jdesc')?>" class="form-control" name="jdesc" id="jdesc" placeholder="Enter ...">
                </div>

                <?php if(form_error('jdesc')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('jdesc') ?> </label>
                </div>
                <?php } ?>

                <button type="submit" class="btn btn-success">Create</button>

                <?=form_close()?>
            </div>
            <!-- /.box-body -->
        </div>
        </div>
</div>