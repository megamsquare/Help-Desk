<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Create New Group</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?=base_url('createusergroup')?>">
                                          <div class="form-group">
                                              <label>Name</label>
                                              <input class="form-control" placeholder="Enter group name" id="name" name="name">
                                          </div>
                                          <div class="form-group">
                                              <label>Description</label>
                                              <input class="form-control" placeholder="Enter group description" id="description" name="description">
                                          </div>

                                          <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                                          <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
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
