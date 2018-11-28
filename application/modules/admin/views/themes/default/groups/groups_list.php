<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Group
            <a  href="<?= base_url('createusergroup') ?>" class="btn btn-round btn-success">Add a new</a></h3>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="dataTables-example">
	                  	  	  <h4>Brands listing</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th> Group ID</th>
                                  <th> Name</th>
                                  <th class="hidden-phone"> Description</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php if (count($groups)): ?>
                                    <?php foreach ($groups as $group): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$group->id?></td>
                                            <td><?=$group->name?></td>
                                            <td><?=$group->description?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
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
