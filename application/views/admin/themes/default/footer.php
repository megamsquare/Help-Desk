<!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 - SuperFlux Group
              <a href="<?= base_url('#') ?>" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url() ?>assets/admin/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/jquery-1.8.3.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url() ?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/admin/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?= base_url() ?>assets/admin/js/common-scripts.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?= base_url() ?>assets/admin/js/sparkline-chart.js"></script>
	  <script src="<?= base_url() ?>assets/admin/js/zabuto_calendar.js"></script>

    <!-- DataTables JavaScript -->
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/jszip.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/vfs_fonts.js"></script>

	<!-- <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Superflux Help Desk!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: '<?= base_url() ?>assets/admin/img/ui-help.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script> -->

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <!-- <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script> -->
<?php if ($this->is_admin): ?>
    <script>

        $(document).ready(function() {
        $('#dataTables-example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'PDF'
                }
            ],
            "order" : [[0,"desc"]]
        } );
        } );
    </script>
    <?php elseif($this->in_group_s): ?>
      <script>
          $(document).ready(function() {
              $('#dataTables-example').DataTable({
                  "order" : [[0,"desc"]]
              });
          });
      </script>
      <?php elseif($this->in_group_m): ?>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    "order" : [[0,"desc"]]
                });
            });
        </script>
    <?php endif; ?>

  </body>
</html>
