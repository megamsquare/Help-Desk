<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Create New Department</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <?php if ($this->session->flashdata('message')): ?>
                                  <div class="col-lg-12 col-md-12">
                                      <div class="alert alert-info alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <?=$this->session->flashdata('message')?>
                                      </div>
                                  </div>
                                  <?php endif; ?>
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?=base_url('createdepartment')?>">
                                        <input type="hidden" value="<?=$users->id?>" id="user_id" name="user_id">
                                          <div class="form-group">
                                              <label>Department Name</label>
                                              <input class="form-control" placeholder="Enter Department Name" id="dept_name" name="dept_name">
                                          </div>
                                          <div class="form-group">
                                              <label>Department Group</label>
                                              <input class="form-control" placeholder="Enter Department Group" id="dept_group" name="dept_group">
                                          </div>
                                          <div class="form-group">
                                              <label>Department Company</label>
                                              <input class="form-control" placeholder="Enter Department Company" id="dept_company" name="dept_company">
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
