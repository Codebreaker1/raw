<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Multi-Level Push Menu - Demo 1</title>
		<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels" />
		<meta name="keywords" content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	<script>
		
  //  var link = document.getElementById('asi');


		 function load_home(){
         // document.getElementById("asi").innerHTML='<object type="text/html" data="home.html" ></object>';
        // var link = document.getElementById('asi');
         document.getElementById("my").src = "isp.php";
        // link.style.display = 'none'; //or

//link.contentWindow.scrollTo(0,500);
         
        //$(".block block-60").hide();
        //  alert("asi");
    }

function first()
{

        // var link = document.getElementById('asi');
         
document.getElementById("my").src = "stock.php";

        //link.style.display = 'block'; 

//link.contentWindow.scrollTo(0,500);
}

function third()
{

document.getElementById("my").src = "table.php";


//link.contentWindow.scrollTo(0,500);

}

function four()
{

document.getElementById("my").src = "histo.php";

}

function five()
{

document.getElementById("my").src = "line.php";


}

		</script>
	
	</head>
	<body>
		<div class="container">
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div class="mp-level">
						<h2 class="icon icon-world">All Categories</h2>
						<ul>
							<li class="icon icon-arrow-left">
								<a class="icon icon-display" href="#">Tests</a>
								<div class="mp-level">
									
									<ul>
										<li class="icon icon-arrow-left">
											<a class="icon icon-phone" onclick="load_home();">Disease % Per Lifestyle Factor</a>
											
										</li>
										<li class="icon icon-arrow-left">
											<a class="icon icon-tv" onclick="first();">Possible Disease for a Particular Factor</a>
											
										</li>
										<li class="icon icon-arrow-left">
											<a class="icon icon-camera" onclick="third();">Table</a>
											
										</li>
										<li class="icon icon-arrow-left">
											<a class="icon icon-camera" onclick="four();">Element result</a>
											
										</li>
										
										<li class="icon icon-arrow-left">
											<a class="icon icon-camera" onclick="five();">Statistics</a>
											
										</li>

									</ul>
								</div>
							</li>
							
							
							
						</ul>
					</div>
				</nav>
				<!-- /mp-menu -->

				<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
						<!-- Top Navigation -->
					
						
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger"></a></p>
								<nav class="codrops-demos">
									
								</nav>
							</div>
							<div class="block block-60" id="asi">

								
								 <iframe src="isp.php" id="my" name="targetframe" height="650px;" width="1000px"allowTransparency="true" scrolling="yes" frameborder="0" >
    </iframe>
    	
							
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	    
		</script>
	</body>
</html>