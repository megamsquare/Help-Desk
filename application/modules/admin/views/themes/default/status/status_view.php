<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Request Status</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
      					<! --ROW OF PANELS -->
      					<div class="row">
                  <div class="col-md-8 col-sm-8 mb">
                    <div class="darkblue-panel pn">
                      <div class="darkblue-header">
                        <h5><?= $ticket['username'] ?>'s Request</h5>
                			</div>
                      <p><h3>Status - <?= $ticket['status'] ?></h3></p>
                			<h1 class="mt"><i class="fa fa-ticket fa-3x"></i></h1>
      		            <p><h3>To - <?= $ticket['dept_name'] ?></h3></p>
                  		<footer>
                  			<div class="centered">
                  				<h5 class="col-xs-6 col-sm-4"><i class="fa fa-trophy"></i> Date/Time Created</h5><h5 class="col-xs-4 col-sm-2">______</h5><h5 class="col-xs-6 col-sm-4"><?= $ticket['date_created'] ?></h5><br>
                          <h5 class="col-xs-6 col-sm-4"><i class="fa fa-trophy"></i> Subject</h5><h5 class="col-xs-4 col-sm-2">______</h5><h5 class="col-xs-6 col-sm-4"><?= $ticket['subject'] ?></h5><br>
                          <h5 class="col-xs-6 col-sm-4"><i class="fa fa-trophy"></i> E-mail</h5><h5 class="col-xs-4 col-sm-2">______</h5><h5 class="col-xs-6 col-sm-4"><?= $ticket['email'] ?></h5><br>
                          <h5 class="col-xs-6 col-sm-4"><i class="fa fa-trophy"></i> Priority</h5><h5 class="col-xs-4 col-sm-2">______</h5><h5 class="col-xs-6 col-sm-4"><?= $ticket['priority'] ?></h5><br><br><br>
                          <h5 class="col-xs-2 col-sm-2"><i class="fa fa-trophy"></i> Message</h5><h5 class="col-xs-4 col-sm-2">______</h5><h5 class="col-xs-6 col-sm-6"><?= $ticket['message'] ?></h5><br>
                  			</div>
                        <div class="col-xs-6 col-sm-8 centered">
                          <form role="form" method="POST" action="<?= base_url('changestatus/'.$ticket['id']) ?>">
                              <input type="hidden" name="status" value="close">
                              <input onclick="return confirm('Are you sure you want to Close this Ticket?')" class="btn btn-theme04 btn-xs" type="submit" value="CLOSE Ticket" />
                          </form>
                        </div>
                  		</footer>
                		</div><! -- /darkblue panel -->
                	</div><!-- /col-md-4 -->

                  <div class="col-md-4 col-sm-4 ds">

                    <!--COMPLETED ACTIONS DONUTS CHART-->
                    <h3>REPLIES</h3>

                    <!-- First Action -->
                    <?php if (count($replies)): ?>
                      <?php foreach ($replies as $key => $list): ?>
                    <div class="desc">
                      <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      </div>
                      <div class="details">
                        <p><muted><?=$list->date_created?></muted><br/>
                           <a href="#"><?=$list->username?></a><br/> <?=$list->message?><br/>
                        </p>
                      </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- /.row (nested) -->

                  </div>
                </div><!-- /END 5TH ROW OF PANELS -->

              	<div class="row mt">
                      <div class="col-lg-12">
                          <div class="panel panel-default">
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <form role="form" method="POST" action="<?=base_url('replystatus')?>">
                                              <div class="form-group">
                                                  <label>Priority</label>
                                                  <input class="form-control" placeholder="<?= $ticket['priority'] ?>" disabled="1">
                                                  <input type="hidden" value="<?= $ticket['id'] ?>" id="ticket_id" name="ticket_id">
                                              </div>
                                              <div class="form-group">
                                                  <label>From</label>
                                                  <input class="form-control" placeholder="<?=$users->first_name?> <?=$users->last_name?>" disabled="1">
                                                  <input type="hidden" value="<?=$users->id?>" id="user_id" name="user_id">
                                              </div>
                                              <div class="form-group">
                                                  <label>Message</label>
                                                  <textarea class="form-control" rows="3" id="message" name="message"></textarea>
                                              </div>
                                              <button type="submit" class="btn btn-primary">Send</button>
                                          </form>
                                      </div>
                              <!-- /.panel-body -->
                          </div>
                          <!-- /.panel -->
                      </div>
                      <!-- /.col-lg-12 -->
              	</div><!-- /row -->

              </div>
            </div>
      		</section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
      <!--main content end-->
