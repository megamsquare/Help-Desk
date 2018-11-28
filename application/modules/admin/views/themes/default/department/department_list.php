<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Department
            <a  href="<?= base_url('createdepartment') ?>" class="btn btn-round btn-success">Add a new</a></h3>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="dataTables-example">
	                  	  	  <h4>Department listing</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Department ID</th>
                                  <th class="hidden-phone"> Name</th>
                                  <th> Department Company</th>
                                  <th> Department Group</th>
                                  <th> Created From IP</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php if (count($departments)): ?>
                                  <?php foreach ($departments as $key => $list): ?>
                                      <tr class="odd gradeX">
                                          <td><?=$list['id']?></td>
                                          <td class="hidden-phone"><?=$list['dept_name']?></td>
                                          <td><?=$list['dept_company']?></td>
                                          <td><?=$list['dept_group']?></td>
                                          <td><?=$list['created_from_ip']?></td>
                                          <td>
                                              <a href="<?= base_url('editdepartment/'.$list['id']) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                              <a href="<?= base_url('deletedepartment/'.$list['id']) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                          </td>
                                      </tr>
                                  <?php endforeach; ?>
                              <?php else: ?>
                                  <tr class="even gradeC">
                                      <td>No data</td>
                                      <td>No data</td>
                                      <td>No data</td>
                                      <td>No data</td>
                                      <td>No data</td>
                                      <td>
                                      </td>
                                  </tr>
                              <?php endif; ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


        <script>
            //custom select box

            $(function(){
                $('select.styled').customSelect();
            });

        </script>
