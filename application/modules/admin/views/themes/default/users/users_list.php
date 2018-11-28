<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Users
            <a  href="<?= base_url('createuser') ?>" class="btn btn-round btn-success">Add a new</a></h3>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="content-panel">
                        <div class="dataTable_wrapper">
                          <table class="table table-striped table-advance table-hover" id="dataTables-example">
	                  	  	  <h4>Users list</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> User ID</th>
                                  <th class="hidden-phone"> Username</th>
                                  <th> Fullname</th>
                                  <th> Email</th>
                                  <th> IP Address</th>
                                  <th> Active</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php if (count($users)): ?>
                                      <?php foreach ($users as $user): ?>
                                          <tr class="odd gradeX">
                                              <td><?=$user->id?></td>
                                              <td><?=$user->username?></td>
                                              <td><?=$user->first_name .' '.$user->last_name?></td>
                                              <td><?=$user->email?></td>
                                              <td><?=$user->ip_address?></td>
                                              <td><?=$user->active?></td>
                                              <td>
                                                  <a href="<?= base_url('edituser/'.$user->id) ?>" class="btn btn-info">edit</a>
                                                  <a href="<?= base_url('deleteuser/'.$user->id) ?>" class="btn btn-danger">delete</a>
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
                                          </td>
                                      </tr>
                                  <?php endif; ?>
                              </tbody>
                          </table>
                        </div>
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
