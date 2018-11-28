<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Update Ticket</h3>
          	<div class="row mt">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <form role="form" method="POST" action="<?= base_url('editticket/' . $ticket->id) ?>">
                                          <div class="form-group">
                                              <label>To</label>
                                              <select class="form-control" id="dept_id" name="dept_id" disabled="1">
                                                  <?php if (count($departments)): ?>
                                                      <?php foreach ($departments as $key => $departments): ?>
                                                          <option value="<?= $departments['id'] ?>" <?= ($ticket->dept_id == $departments['id']) ? 'selected="selected"' : '' ?>> <?= $departments['dept_name'] ?></option>
                                                      <?php endforeach; ?>
                                                  <?php endif; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Message Updated By</label>
                                              <input class="form-control" placeholder="<?=$users->first_name?> <?=$users->last_name?>" disabled="1">
                                              <input type="hidden" value="<?=$users->id?>" id="user_id" name="user_id">
                                          </div>
                                          <div class="form-group">
                                              <label>Subject</label>
                                              <input value="<?= $ticket->subject ?>" class="form-control" placeholder="Enter product name" id="subject" name="subject">
                                          </div>
                                          <div class="form-group">
                                              <label>E-mail</label>
                                              <input value="<?= $ticket->email ?>" class="form-control" placeholder="Enter product mode" id="email" name="email">
                                          </div>
                                          <div class="form-group">
                                              <label>Priority</label>
                                              <input value="<?= $ticket->priority ?>" class="form-control" placeholder="Enter product description" id="priority" name="priority">
                                          </div>
                                          <div class="form-group">
                                              <label>Message</label>
                                              <textarea class="form-control" rows="3" id="message" name="message"><?= $ticket->message ?></textarea>
                                          </div>
                                          <button type="submit" class="btn btn-primary">Update</button>
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
