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
                Number One.
                <span class="line"></span>
              </div>
            </div>
            <br />
            <!-- NEW DIV CONTENT -->
            <div class="row">
              <div class="col-md-12">
                  <form class="form-horizontal" role="form" method="post">
                      
                      <div class="form-group">
                        <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputNama" placeholder="" name="nama">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputNrp" class="col-sm-2 control-label">NRP</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputNrp" placeholder="" name="nrp">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputNA" class="col-sm-2 control-label">Nilai Angka</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputNA" placeholder="" name="nilai">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-offset-2 col-sm-4">
                          <input type="submit" class="btn btn-primary" value="Submit" name="SubmitOne">
                          <input type="reset" class="btn btn-default" value="Clear">
                        </div>
                      </div>
                      
                  </form>
                  
                  <?php
                    if(isset($_POST['SubmitOne'])) {
                        extract($_POST);
                        $nh = '';
                        $pr = '';
                        if($nilai <= 100) {
                            $nh = 'A';
                            $pr = 'Sempurna';
                        } else if($nilai <= 80) {
                            $nh = 'AB';
                            $pr = 'Sangat Baik';
                        } else if($nilai <= 70) {
                            $nh = 'B';
                            $pr = 'Baik';
                        } else if($nilai <= 65) {
                            $nh = 'BC';
                            $pr = 'Lebih Dari Cukup';
                        } else if($nilai <= 60) {
                            $nh = 'C';
                            $pr = 'Cukup';
                        } else if($nilai <= 55) {
                            $nh = 'D';
                            $pr = 'Tidak Memuaskan';
                        } else {
                            $nh = 'E';
                            $pr = 'Sangat Tidak Memuaskan';
                        }
                  ?>
                  <div class="well">
                      <h3>Result</h3>
                      <hr />
                      <div class="row">
                        <div class="col-md-2">Nama</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8"><?=$nama?></div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">NRP</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8"><?=$nrp?></div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">Nilai Angka</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8"><?=$nilai?></div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">Nilai Huruf</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8"><?=$nh?></div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">Predikat</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8"><?=$pr?></div>
                      </div>
                  </div>
                  
                  <?php
                    }
                  ?>
              </div>
            </div>
            <!-- END > NEW CONTENT ROW -->

            <br /><br />
            <hr />

            <!-- START > NEW CONTENT ROW -->
            <!-- NEW DIV TITLE -->
            <div class="row">
              <div class="col-md-12 title">
                Number Two.
                <span class="line"></span>
              </div>
            </div>
            <br />
            <!-- NEW DIV CONTENT -->
            <div class="row">
              <div class="col-md-12">
                  <form method="post" name="two" role="form" class="form">
                    <div class="row">
                        <div class="col-md-12">
                            Tampilkan angka dari 0 sampai 10
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            Lakukan 
                            <label><input type="radio" name="radiobutt" value="1"> <strong>Continue</strong></label>
                            <label><input type="radio" name="radiobutt" value="2"> <strong>Break</strong></label>
                            <label><input type="radio" name="radiobutt" value="3"> <strong>Return</strong></label>
                            <label><input type="radio" name="radiobutt" value="4"> <strong>Exit</strong></label>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            Pada hitungan ke
                            <select name="hitungan">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="Submit" name="SubmitTwo">
                        </div>
                    </div>
                      
                  </form>
                  
                  <hr />
                  
                  <?php
                    if(isset($_POST['SubmitTwo'])) {
                        extract($_POST);
                        $str = '';
                        switch($radiobutt) {
                            case 1: $stat= 'Continue'; break;
                            case 2: $stat= 'Break'; break;
                            case 3: $stat= 'Return'; break;
                            case 4: $stat= 'Exit'; break;
                            default;
                        }
                        
                        
                  ?>
                  <div class="well">
                      <h3>Result</h3>
                      <hr />
                      <div class="row">
                        <div class="col-md-12">Menampilkan angka dari 0 sampai 10</div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">Dengan melakukan perintah <?=$stat?> pada hitungan ke-<?=$hitungan?></div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">Bilangan deret-nya :</div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <?php
                                for($i=0; $i<=10; $i++) {
                                    if($i == $hitungan) {
                                        if($radiobutt == 1)
                                            continue;
                                        else if($radiobutt == 2)
                                            break;
                                        else if($radiobutt == 3) {
                                            echo ' : Looping selesai';
                                            return;
                                        }
                                        else {
                                            echo ' : Looping selesai';
                                            exit;
                                        }
                                    }

                                    if($i != 0)
                                        echo ', '. $i;
                                    else
                                        echo $i;
                                }
                        
                                echo ' : Looping selesai';
                            ?>
                            
                            </div>
                      </div>
                  </div>
                  
                  <?php
                    }
                  ?>
                  
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
