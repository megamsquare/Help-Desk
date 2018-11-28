<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Update User</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?=base_url('admin/users/reset/'.$user->id)?>">
                                          <div class="form-group">
                                              <label>User Id</label>
                                              <input class="form-control" value="<?=$user->id?>" placeholder="Auto generated" disabled="1">
                                          </div>
                                          <div class="form-group">
                                              <label>Username</label>
                                              <input class="form-control" value="<?=$user->password?>" placeholder="Auto generated" disabled="1">
                                          </div>
                                          <div class="form-group">
                                              <label>New Password</label>
                                              <input class="form-control" value="<?=$user->email?>" placeholder="Enter group description" id="email" name="email">
                                          </div>
                                          <div class="form-group">
                                              <label>Confirm New Password</label>
                                              <input class="form-control" value="<?=$user->first_name?>" placeholder="Enter group description" id="first_name" name="first_name">
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
