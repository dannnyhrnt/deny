<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>D-Workshop</title>
    <link rel="icon" href="assets/img/me.jpg" type="image/x-icon"> 

    <!-- Core CSS - Include with every page -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugin/datetimepicker/datepicker.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/plugin/prettyphoto/prettyPhoto.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div id="wrapper">

        
            <div class="navbar-default navbar-static-side" role="navigation">

                <div class="navbar-header">
                    <span class="navbar-header-title">D-Workshop
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </span>
                </div>
                <!-- /.navbar-header -->

                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="img-me">
                          <div class="hide-this">
                            <img src="assets/img/me.jpg" width="100%" class="">
                            <div class="me-title">Hi, I'm <strong>Deny Herianto</strong></div>
                          </div>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="portofolio.html"><span class="glyphicon glyphicon-stats"></span> Portofolio</a></li>
                        <li><a href="contact.html"><span class="glyphicon glyphicon-comment"></span> Contact</a></li>
                        <li class="active"><a href="experiment.html"><span class="glyphicon glyphicon-star"></span> Experiment</a></li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        

        <div id="page-wrapper">
            

            <!-- START > NEW CONTENT ROW -->
            <div class="top-title">
                EXPERIMENT
            </div>
            

            <!-- START > NEW CONTENT ROW -->
            <!-- NEW DIV TITLE -->
            <div class="row">
              <div class="col-md-12 title">
                Files in PHP.
                <span class="line"></span>
              </div>
            </div>
            <br />
            <!-- NEW DIV CONTENT -->
            <div class="row">
              <div class="col-md-12">
                <h4>
                  <ul>
                      <li>
                        <a href="exp_vault/day10/bukutamu.php"><strong>Buku Tamu</strong></a>
                      </li>
                      <li>
                        <a href="exp_vault/day10/biodata.php"><strong>Biodata</strong></a>
                      </li>
                  </ul>
                </h4>
              </div>
            </div>
            <!-- END > NEW CONTENT ROW -->

            <br /><br />
            <hr />

            

        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->

    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- FANCY -->
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="assets/plugin/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="assets/plugin/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="assets/plugin/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

    
  <script type="text/javascript">
   $(document).ready(
      function()
      {
         $(".fancybox").fancybox();
      }
   );
   </script>

    <script language="javascript">
       function funcOne() {
            var bil1 = document.one.bil1.value;
            if(bil1 >= 0 && bil1 <= 40)
                document.one.bil2.value = 'E'
            else if(bil1 >= 41 && bil1 <= 55)
                document.one.bil2.value = 'D'
            else if(bil1 >= 56 && bil1 <= 60)
                document.one.bil2.value = 'C'
            else if(bil1 >= 61 && bil1 <= 65)
                document.one.bil2.value = 'BC'
            else if(bil1 >= 66 && bil1 <= 70)
                document.one.bil2.value = 'B'
            else if(bil1 >= 71 && bil1 <= 80)
                document.one.bil2.value = 'AB'
            else if(bil1 >= 81 && bil1 <= 100)
                document.one.bil2.value = 'A'
        }

        function funcTwo() {
          n = window.prompt("Batas atas:");
          var i;
          var str = '';
          str += "Batas atas: "+ n +"\n";
          str += "Hasil: ";
          for(i=1; i<=n; i++) {
            if(i%2!=0 && i%5!=0)
              str += i + " ";
          }
          document.two.ta.value = str;
        }

        function plus() {
          var bil1 = Number(document.three.bil1.value);
          var bil2 = Number(document.three.bil2.value);
          document.three.hasil.value = (bil1+bil2);
        }
        function minus() {
          var bil1 = Number(document.three.bil1.value);
          var bil2 = Number(document.three.bil2.value);
          document.three.hasil.value = bil1-bil2;
        }
        function multiply() {
          var bil1 = Number(document.three.bil1.value);
          var bil2 = Number(document.three.bil2.value);
          document.three.hasil.value = bil1*bil2;
        }
        function divide() {
          var bil1 = Number(document.three.bil1.value);
          var bil2 = Number(document.three.bil2.value);
          document.three.hasil.value = bil1/bil2;
        }
    </script>

</body>

</html>
