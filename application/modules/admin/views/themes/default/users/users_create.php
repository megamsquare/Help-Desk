<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Create New User</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?=base_url('admin/users/create')?>">
                                          <div class="form-group">
                                              <label>Username</label>
                                              <input class="form-control"  placeholder="Enter username" id="username" name="username"  required>
                                          </div>
                                          <div class="form-group">
                                              <label>Email</label>
                                              <input class="form-control" placeholder="Enter email" id="email" name="email"  required>
                                          </div>
                                          <div class="form-group">
                                              <label>Password</label>
                                              <input type="password" class="form-control" placeholder="Enter password" id="password" name="password"  required>
                                          </div>
                                          <div class="form-group">
                                              <label>User Group</label>
                                              <select class="form-control" id="group_id" name="group_id">
                                                  <?php foreach ($groups as $group): ?>
                                                  <option value="<?=$group->id?>"><?=$group->name?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Department</label>
                                              <select class="form-control" id="dept_id" name="dept_id">
                                                  <?php if (count($departments)): ?>
                                                      <?php foreach ($departments as $key => $departments): ?>
                                                          <option value="<?= $departments['id'] ?>"><?= $departments['dept_name'] ?></option>
                                                      <?php endforeach; ?>
                                                  <?php endif; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>First Name</label>
                                              <input class="form-control" placeholder="Enter first name" id="first_name" name="first_name"  required>
                                          </div>
                                          <div class="form-group">
                                              <label>Last Name</label>
                                              <input class="form-control" placeholder="Enter last name" id="last_name" name="last_name"  required>
                                          </div>

                                          <div class="form-group">
                                              <label>Phone</label>
                                              <input class="form-control" placeholder="Enter phone number" id="phone" name="phone">
                                          </div>
                                          <button type="submit" class="btn btn-primary">Save</button>
                                          <button type="reset" class="btn btn-default">Reset</button>
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
