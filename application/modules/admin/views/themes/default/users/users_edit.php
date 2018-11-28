<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Update User</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?=base_url('edituser/'.$user->id)?>">
                                          <div class="form-group">
                                              <label>Username</label>
                                              <input class="form-control" value="<?=$user->username?>" placeholder="Auto generated" disabled="1">
                                          </div>
                                          <div class="form-group">
                                              <label>Email</label>
                                              <input class="form-control" value="<?=$user->email?>" placeholder="Enter group description" id="email" name="email">
                                          </div>
                                          <div class="form-group">
                                              <label>Reset Password</label>
                                              <input type="password" class="form-control" placeholder="Reset password" id="password" name="password">
                                          </div>
                                          <div class="form-group">
                                              <label>User Group</label>
                                              <select class="form-control" id="group_id" name="group_id">
                                                  <?php foreach ($groups as $group): ?>
                                                  <option value="<?=$group->id?>" <?=ui_selected_item($user_group->name,$group->name)?></optio><?=$group->name?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Department</label>
                                              <select class="form-control" id="dept_id" name="dept_id">
                                                  <?php if (count($departments)): ?>
                                                      <?php foreach ($departments as $key => $departments): ?>
                                                          <option value="<?= $departments['id'] ?>" <?= ($user->dept_id == $departments['id']) ? 'selected="selected"' : '' ?>> <?= $departments['dept_name'] ?></option>
                                                      <?php endforeach; ?>
                                                  <?php endif; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>First Name</label>
                                              <input class="form-control" value="<?=$user->first_name?>" placeholder="Enter group description" id="first_name" name="first_name">
                                          </div>
                                          <div class="form-group">
                                              <label>Last Name</label>
                                              <input class="form-control" value="<?=$user->last_name?>" placeholder="Enter group description" id="last_name" name="last_name">
                                          </div>
                                          <div class="form-group">
                                              <label>Phone</label>
                                              <input class="form-control" value="<?=$user->phone?>" placeholder="Enter group description" id="phone" name="phone">
                                          </div>
                                          <button type="submit" class="btn btn-primary">Update</button>
                                      </form>
                                  </div>


                              </div>
                              <!-- /.row (nested) -->
                          </div>
                          <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                  </div>
                  <!-- /.col-lg-12 -->
          	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
