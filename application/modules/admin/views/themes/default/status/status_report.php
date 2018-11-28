<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Ticket</h3>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="dataTables-example">
	                  	  	  <h4>Ticket list</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Ticket ID</th>
                                  <th class="hidden-phone"> Requested By</th>
                                  <th> To Departent</th>
                                  <th> E-mail</th>
                                  <th> Subject</th>
                                  <th> Priority</th>
                                  <th> Created Date</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php if (count($tickets)): ?>
                                    <?php foreach ($tickets as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list->id?></td>
                                            <td><?=$list->username?></td>
                                            <td><?=$list->dept_name?></td>
                                            <td><?=$list->email?></td>
                                            <td><?=$list->name?></td>
                                            <td><?=$list->priority?></td>
                                            <td><?=$list->date_created?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
                                        <td>No data</td>
                                        <td>No data</td>
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
