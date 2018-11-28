<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Update Group</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?=base_url('editusergroup/'.$group->id)?>">
                                          <div class="form-group">
                                              <label>Name</label>
                                              <input class="form-control" value="<?=$group->name?>" placeholder="Enter group description" id="name" name="name">
                                          </div>
                                          <div class="form-group">
                                              <label>Description</label>
                                              <input class="form-control" value="<?=$group->description?>" placeholder="Enter group description" id="description" name="description">
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
