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
                <!-- input states -->
                <div class="form-group">
                  <label class="control-label" for="fname"><i class="fa fa-check"></i>First Name</label>
                  <input type="text" value="<?=set_value('fname')?>" class="form-control" name="fname" id="fname" placeholder="Enter ...">
                  <span class="help-block">This is for the first name of the employee.</span>
                </div>

                <?php if(form_error('fname')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('fname') ?> </label>
                </div>
                <?php } ?>

                <div class="form-group">
                  <label class="control-label" for="lname"><i class="fa fa-check"></i>Last Name</label>
                  <input type="text" value="<?=set_value('lname')?>" class="form-control" name="lname" id="lname" placeholder="Enter ...">
                  <span class="help-block">This is for the last name of the employee.</span>
                </div>

                <?php if(form_error('lname')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i> 
                <label> <?= form_error('lname') ?> </label>
                </div>
                <?php } ?>
                
                <div class="form-group">
                  <label class="control-label" for="mname"><i class="fa fa-check"></i>Middle Name</label>
                  <input type="text" value="<?=set_value('mname')?>" class="form-control" name="mname" id="mname" placeholder="Enter ...">
                  <span class="help-block">This is for the middle name of the employee.</span>
                </div>

                <?php if(form_error('mname')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i> 
                <label> <?= form_error('mname') ?> </label>
                </div>
                <?php } ?>
                    
                <div class="form-group">
                <label>Date of birth</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input value="<?=set_value('dob')?>" name="dob" id="dob" type="text" class="form-control pull-right datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <?php if(form_error('dob')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i> 
                <label> <?= form_error('dob') ?> </label>
                </div>
                <?php } ?>

                <button type="submit" class="btn btn-success">Create</button>

                <?=form_close()?>
            </div>
            <!-- /.box-body -->
        </div>
      </div>

</div>