<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Create New Ticket</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?=base_url('createtickets')?>">
                                          <div class="form-group">
                                              <label>From</label>
                                              <input class="form-control" placeholder="<?=$users->first_name?> <?=$users->last_name?>" disabled="1">
                                              <input type="hidden" value="<?=$users->id?>" id="user_id" name="user_id">
                                          </div>
                                          <div class="form-group">
                                              <label>To</label>
                                              <select class="form-control" id="dept_id" name="dept_id">
                                                  <?php if (count($departments)): ?>
                                                      <?php foreach ($departments as $key => $departments): ?>
                                                          <option value="<?= $departments['id'] ?>"><?= $departments['dept_name'] ?></option>
                                                      <?php endforeach; ?>
                                                  <?php endif; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Subject</label>
                                              <select class="form-control" id="subject" name="subject">
                                                  <<?php if (count($categories)): ?>
                                                        <?php foreach ($categories as $key => $categories): ?>
                                                          <option value="<?= $categories['id'] ?>"><?= $categories['name'] ?></option>
                                                      <?php endforeach; ?>
                                                  <?php endif; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Priority</label>
                                              <select class="form-control" id="priority" name="priority">
                                    					  <option value="Low">Low</option>
                                    					  <option value="Medium">Medium</option>
                                    					  <option value="High">High</option>
                                    					</select>
                                          </div>
                                          <div class="form-group">
                                              <label>Message</label>
                                              <textarea class="form-control" rows="3" id="message" name="message"></textarea>
                                          </div>
                                          <button type="submit" class="btn btn-primary">Send</button>
                                          <button type="reset" class="btn btn-default">Reset</button>
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
