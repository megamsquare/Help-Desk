<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Category
            <a  href="<?= base_url('createcategory') ?>" class="btn btn-round btn-success">Add a new</a></h3>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="dataTables-example">
	                  	  	  <h4>Category listing</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Category ID</th>
                                  <th class="hidden-phone"> Name</th>
                                  <th> Department</th>
                                  <th> Created From IP</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php if (count($categories)): ?>
                                      <?php foreach ($categories as $key => $list): ?>
                                      <tr class="odd gradeX">
                                          <td><?=$list['id']?></td>
                                              <td><?=$list['name']?></td>
                                          <td class="hidden-phone"><?=$list['dept_name']?></td>
                                          <td><?=$list['created_from_ip']?></td>
                                          <td>
                                              <a href="<?= base_url('editcategory/'.$list['id']) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                          </td>
                                      </tr>
                                  <?php endforeach; ?>
                              <?php else: ?>
                                  <tr class="even gradeC">
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
