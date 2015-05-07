      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      
      <!--sidebar end-->
      
      <!--**********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
     <section id="main-content">
           <section class="wrapper">

            <h3><i class="fa fa-angle-right"></i> Welcome</h3>
              <form action="?request=dn" method="post">
                <button type="submit" class="btn btn-default btn-lg">New Certificate</button>
              </form>

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Certificate Request List</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th>Common Name</th>
                                  <th>Email</th>
                                  <th>Organization Unit</th>
                                  <th>Organizatton Name</th>
                                  <th>City</th>
                                  <th>State</th>
                                  <th>Country</th>
                                  <th>Key Size</th>
                                  <th>Days</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                                foreach ($list as $l) {
                                  echo "<tr>
                                    <td>".$l['commonname']."</td>
                                    <td>".$l['email']."</td>
                                    <td>".$l['orgunit']."</td>
                                    <td>".$l['orgname']."</td>
                                    <td>".$l['city']."</td>
                                    <td>".$l['state']."</td>
                                    <td>".$l['country']."</td>
                                    <td>".$l['keysize']."</td>
                                    <td>".$l['days']."</td>
                                    <td><button class=btn btn-success btn-xs><a href="."?request=download&id=".$l['id_dn'].">Download</a></button></td>
                                  </tr>";
                                }
                              ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
    
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/jquery-1.8.3.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="asset/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="asset/js/jquery.scrollTo.min.js"></script>
    <script src="asset/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="asset/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="asset/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="asset/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="asset/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="asset/js/sparkline-chart.js"></script>    
	<script src="asset/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        /*$(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'asset/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });*/
	</script>
	
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
  

  </body>
</html>
