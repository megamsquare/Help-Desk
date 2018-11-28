<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>System Trail</h3>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="dataTables-example">
	                  	  	  <h4>Department listing</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>ID</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> User</th>
                                  <th>Action Taken</th>
                                  <th> Memo</th>
                                  <th> Date Created</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php if (count($trail)): ?>
                                  <?php foreach ($trail as $key => $list): ?>
                                      <tr class="odd gradeX">
                                          <td><?=$list['id']?></td>
                                          <td class="hidden-phone"><?=$list['username']?></td>
                                          <td><?=$list['actions']?></td>
                                          <td><?=$list['memo']?></td>
                                          <td><?=$list['date_created']?></td>
                                      </tr>
                                  <?php endforeach; ?>
                              <?php else: ?>
                                  <tr class="even gradeC">
                                      <td>No data</td>
                                      <td>No data</td>
                                      <td>No data</td>
                                      <td>No data</td>
                                      <td>No data</td>
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
