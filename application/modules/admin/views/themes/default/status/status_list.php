<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Ticket</h3>
              <div class="row">
                <div class="col-lg-12">
                      <form role="form" method="POST" action="<?=base_url('statusreport')?>">
                          <div class="form-group col-lg-4">
                              <label>Subject</label>
                              <select class="form-control" id="subject" name="subject">
                                  <<?php if (count($categories)): ?>
                                        <?php foreach ($categories as $key => $categories): ?>
                                          <option value="<?= $categories['id'] ?>"><?= $categories['name'] ?></option>
                                      <?php endforeach; ?>
                                  <?php endif; ?>
                              </select>
                          </div>
                          <div class="form-group col-lg-3">
                              <label>Start Date</label>
                              <input class="form-control" id="datepicker" name="startDate" placeholder="YYYY-MM-DD">
                          </div>
                          <div class="form-group col-lg-3">
                              <label>End Date</label>
                              <input class="form-control" id="datepicker" name="endDate" placeholder="YYYY-MM-DD">
                          </div>
                          <div class="form-group col-lg-2">
                            <button type="search" class="btn btn-primary">Search</button>
                          </div>
                      </form>
                </div>
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
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php if (count($tickets)): ?>
                                    <?php foreach ($tickets as $key => $list): ?>
                                        <tr class="odd">
                                            <td><?=$list['id']?></td>
                                            <td><?=$list['username']?></td>
                                            <td><?=$list['dept_name']?></td>
                                            <td><?=$list['email']?></td>
                                            <td><?=$list['name']?></td>
                                            <td><?=$list['priority']?></td>
                                            <td>
                                              <?=$list['status']?>
                                              <form role="form" method="POST" action="<?= base_url('changestatus/'.$list['id']) ?>">
                                                <input type="hidden" value="<?=$users->id?>" id="user_id" name="user_id">
                                                <?php  if($list['status'] == 'open'): ?>
                                                  <input type="hidden" name="status" value="close">
                                                  <input onclick="return confirm('Are you sure you want to Close this Ticket?')" class="btn btn-theme04 btn-xs" type="submit" value="CLOSE Ticket" />
                                                <?php else:?>
                                                  <input type="hidden" name="status" value="open">
                                                  <input onclick="return confirm('Are you sure you want to Open this Ticket?')" class="btn btn-theme03 btn-xs" type="submit" value="OPEN Ticket" />
                                                <?php endif;?>
                                              </form>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('viewstatus/'.$list['id']) ?>" class="btn btn-theme02 btn-xs"><i class="fa fa-file-text "> View Status</i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even">
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
