<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Ticket
            <a  href="<?= base_url('createtickets') ?>" class="btn btn-round btn-success">Add a new</a></h3>
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
                                  <th> Status</th>
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
                                            <td>
                                                <a href="<?= base_url('viewticket/'.$list->id) ?>" class="btn btn-theme02 btn-xs"><i class="fa fa-file-text "> View Status</i></a>
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
                                        <td>No data</td>
                                        <td>
                                          <a href="#" class="btn btn-theme02 btn-xs"><i class="fa fa-file-text "> View Status</i></a>
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
