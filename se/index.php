<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Search Engine - Bahasa Pemrograman
    </title>

    <link href="assets/favicon.ico" rel="shortcut icon">
    <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/bootstrap-3.3.4-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/main.css" rel="stylesheet" type="text/css" /> -->

    <style>
        #output {
            padding-top: 50px;
            padding-bottom: 20px;
        }
        
        /* Start by setting display:none to make this hidden.
           Then we position it in relation to the viewport window
           with position:fixed. Width, height, top and left speak
           for themselves. Background we set to 80% white with
           our animation centered, and no-repeating */
        .modal {
            display:    none;
            position:   fixed;
            z-index:    1000;
            top:        0;
            left:       0;
            height:     100%;
            width:      100%;
            background: rgba( 255, 255, 255, .8 ) 
                        url('assets/img/ajax-loader.gif') 
                        50% 50% 
                        no-repeat;
        }
        
        /* When the body has the loading class, we turn
           the scrollbar off with overflow:hidden */
        body.loading {
            overflow: hidden;   
        }
        
        /* Anytime the body has the loading class, our
           modal element will be visible */
        body.loading .modal {
            display: block;
        }
        
    </style>

</head>

<body class="glossed"><div class="all-wrapper fixed-header left-menu hide-side-menu">
  <div class="page-header">
    <div class="header-links hidden-xs">
    </div>
    <a class="current logo hidden-xs" href="index.html"><i class="fa fa-rocket"></i></a>
    <a class="menu-toggler" href="#"><i class="fa fa-bars"></i></a>
    <h1></h1>
  </div>
  
  </ul>
</div>

  </div>

  <div class="main-content">

    	<div class="search-bar">
    		<h1 class="page-title">
    	      <i class="fa fa-search"></i>
    	      Search Engine - <strong>Bahasa Pemrograman</strong>
    	    </h1>

    	    <div class="big-search-box">
    	      <form role="form">
    	        <div class="input-group">
    	          <input type="text" id="searchinput" placeholder="Input your search query..." class="form-control nrb input-lg" name="searchinput" autofocus="autofocus">
    	          <div class="input-group-btn">
                  <!-- <input type="submit" class="btn btn-primary btn-lg" type="button" value="Search" name="searchbutton"> -->
    	            <button type="submit" class="btn btn-primary btn-lg" type="button" id="searchbutton">Search</button>
    	          </div>
    	        </div>
    	      </form>
    	    </div>

          <div id="output"></div>
    	</div>

  </div><!--END MAIN CONTENT-->
  <div class="page-footer">
  
  </div>

 

</div>    

    <div class="modal"><!-- Place at bottom of page --></div>

	  <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
    
    <script type="text/javascript">
	    $(document).ready(function() {
        $("body").addClass('loaded');

      	$(window).on('beforeunload', function () {
        	$('body').removeClass('loaded');
      	});
      });

      $body = $("body");
            
      $(document).on({
          ajaxStart: function() { $body.addClass("loading"); },
          ajaxStop: function() { $body.removeClass("loading"); }    
      });
      
      $("#searchbutton").click(function() {
          $.ajax({
              url : "process.php",
              data: { 'searchinput': $('#searchinput').val() },
              // dataType: html,
              type : "post"
          }).done(function(data){
              $("#output").html(data);
              // $("#tampilkan").hide();
          });
          return false;
      });
	</script>
</body>

</html>