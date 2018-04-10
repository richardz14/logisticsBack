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
                <label>Usertype</label> <br>
               <?=form_dropdown('usertype',$usertype,'',['class' => 'form-control select2','style' => 'width: 100%;'])?>
              </div>
              <?php if(form_error('usertype')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('usertype') ?> </label>
                </div>
                <?php } ?>

                   <div class="form-group">
                  <label class="control-label" for="fname"><i class="fa fa-check"></i>First Name</label>
                  <input type="text" value="<?=set_value('fname')?>" class="form-control" name="fname" id="fname" placeholder="Enter ...">
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
                </div>

                <?php if(form_error('lname')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('lname') ?> </label>
                </div>
                <?php } ?>
                
                <div class="form-group">
                  <label class="control-label" for="username"><i class="fa fa-check"></i>Username</label>
                  <input type="text" value="<?=set_value('username')?>" class="form-control" name="username" id="username" placeholder="Enter ...">
                </div>

                <?php if(form_error('username')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('username') ?> </label>
                </div>
                <?php } ?>

                <div class="form-group">
                  <label class="control-label" for="password"><i class="fa fa-check"></i>Password</label>
                  <input type="password" value="<?=set_value('password')?>" class="form-control" name="password" id="password" placeholder="Enter ...">
                </div>

                <?php if(form_error('password')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('password') ?> </label>
                </div>
                <?php } ?>
                
                <div class="form-group">
                  <label class="control-label" for="rePassword"><i class="fa fa-check"></i>Re-type Password</label>
                  <input type="password" value="<?=set_value('rePassword')?>" class="form-control" name="rePassword" id="rePassword" placeholder="Enter ...">
                </div>

                <?php if(form_error('rePassword')){ ?>
                <div class="form-group has-error">
                <i class="fa fa-warning"></i>
                <label>  <?= form_error('rePassword') ?> </label>
                </div>
                <?php } ?>


                <button type="submit" class="btn btn-success">Create</button>

                <?=form_close()?>
            </div>
            <!-- /.box-body -->
        </div>
        </div>
</div>