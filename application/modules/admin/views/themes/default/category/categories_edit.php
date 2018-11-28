<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Update Brand</h3>
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
                                      <form role="form" method="POST" action="<?=base_url('editcategory/'.$category->id)?>">
                                        <input type="hidden" value="<?=$users->id?>" id="user_id" name="user_id">
                                          <div class="form-group">
                                              <label>Description</label>
                                              <input class="form-control" value="<?=$category->name?>" placeholder="Enter Description" id="name" name="name">
                                          </div>
                                          <div class="form-group">
                                              <label>Department</label>
                                              <select class="form-control" id="dept_id" name="dept_id">
                                                  <?php if (count($departments)): ?>
                                                      <?php foreach ($departments as $key => $departments): ?>
                                                          <option value="<?= $departments['id'] ?>" <?= ($category->dept_id == $departments['id']) ? 'selected="selected"' : '' ?>> <?= $departments['dept_name'] ?></option>
                                                      <?php endforeach; ?>
                                                  <?php endif; ?>
                                              </select>
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
