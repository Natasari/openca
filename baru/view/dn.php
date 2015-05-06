<!--<html>
<body>
	<b>Create a new Root Certificate Autdority</b><br/>
	<form action="?request=dn_function" method="post">
	<input type="hidden" name="create_ca" value="create_ca"/>
	<input type="hidden" name="menuoption" value="create_ca"/>
	<input type="hidden" name="device_type" value="ca_cert"/>
	<input type="hidden" name="name" value="peni"><br>
	
	<table>
	<tr>
		<td>Common Name (eg root-ca.golf.local)</td>
		<td>
			<input type="text" name="cert_dn[commonName]" value="ABC Widgets Certificate Autdority" size="40">
		</td>
	</tr>
	<tr>
		<td>Contact Email Address</td>
		<td>
			<input type="text" name="cert_dn[emailAddress]" value="cert@abcwidgets.com" size="30">
		</td>
	</tr>
	<tr>
		<td>Organizational Unit Name</td>
		<td>
			<input type="text" name="cert_dn[organizationalUnitName]" value="Certification" size="30">
		</td>
	</tr>
	<tr>
		<td>Organization Name</td>
		<td>
			<input type="text" name="cert_dn[organizationName]" value="ABC Widgets" size="25">
		</td>
	</tr>
	<tr>
		<td>City</td>
		<td>
			<input type="text" name="cert_dn[localityName]" value="Beverly Hills" size="25">
		</td>
	</tr>
	<tr>
		<td>State</td>
		<td>
			<input type="text" name="cert_dn[stateOrProvinceName]" value="California" size="25">
		</td>
	</tr>
	<tr>
		<td>Country</td>
		<td>
			<input type="text" name="cert_dn[countryName]" value="US" size="2">
		</td>
	</tr>
	<tr>
		<td>Key Size</td>
		<td>
			<input type="radio" name="cert_dn[keySize]" value="1024" checked /> 1024bits 
			<input type="radio" name="cert_dn[keySize]" value="2048" /> 2048bits
			<input type="radio" name="cert_dn[keySize]" value="4096" /> 4096bits
		</td>
	</tr>
	<tr>
		<td>Number of Days</td><td><input type="text" name="cert_dn[days]" size="4" value="356" /></td></tr>
	<tr>
		<td>Certificate Passphrase</td>
		<td>
			<input type="text" name="passphrase" value="peni"/>
		</td>
	</tr>
	<tr>
		<td><td>
		<input type="submit" value="Create Root CA"/>
	</table>
	</form> 

</body>
</html>
      -->
     <section id="main-content">
           <section class="wrapper">

            <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
              
              <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> New C</h4>
                      
                      <form action="?request=dn_function" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Default</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Help text</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                                  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Rounder</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Input focus</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Disabled</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Placeholder</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" placeholder="placeholder">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password"  class="form-control" placeholder="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Static control</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static">email@example.com</p>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-10">
                                  <button  style="margin-left:21%" type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </div>
                          
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
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
