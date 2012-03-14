<?php
	require_once('auth.php');
?>

<html><head>
    <title>SI Student Project Resource</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
	
    <div class="wrapper"><!--Wrapper for sticking footer to bottom of page-->
	
        <div id="headerContainer"><!--Header container-->
            
            <header id="header"><!--Header section-->
				<!--<a class="login" href="logout" style="top: 15px;">Log out</a>-->
				
                <div id="siteName"><!--Site name and tagline-->
                    <h1><a href="index.php">SI Student Project Resource</a></h1>
                </div>
            
                <nav id="topNav"><!--Main site navigation-->
                    <ul>
                        <li class="rightMargin">
						<li><a href="courses.php">Courses</a></li>
                        <li><a href="instructors.php">Instructors</a></li>
						<li><a href="methods.php">Methods</a></li>'
                    </ul>
                </nav>
            
            </header>
            
        </div><!--End header-->
        
        <div id="guts"><!--Main content container-->
            
            <div id="content"><!--Main content section-->
	            
                <h2></h2><!--Project information-->

	            <div id="infoPanel"><!--Project information sidebar-->
					<div class="box1">
						<p class="about">Courses</p>
						
						<div class="spacer">
								<h4 class="panelHeader"></h4>
									<ul class="subInfo">
										<li><a href="courses.php">SI 501</a></li>
										<li><a href="courses.php">SI 572</a></li>
										<li><a href="courses.php">SI 622</a></li>
									</ul>
							</div>
					</div>
					
					<div class="box2">
						<p class="about">Instructors</p>
						
						<div class="spacer">
						
							<h4 class="panelHeader"></h4>
									<ul class="subInfo">
										<li><a href="instructors.php">Dr. Chuck</a></li>
										<li><a href="instructors.php">Professor Finholt</a></li>
										<li><a href="instructors.php">Professor Newman</a></li>
									</ul>
							</div>
					</div>
					<div class="box3">
						<p class="about">Methods</p>
						<div class="spacer">
						
							<h4 class="panelHeader"></h4>
									<ul class="subInfo">
										<li><a href="methods.php">Heuristic Evaluation</a></li>
										<li><a href="methods.php">Comparative Analysis</a></li>
										<li><a href="methods.php">Personas</a></li>
									</ul>
							</div>
					</div>
					
								

	            </div><!--End infoSidebar-->
	                
					<p>
					<?php echo $_SESSION['SESS_EMAIL'];?>
					<input type="button" value="Logout" onClick="window.location='logout.php' ">
					</p>
	                
					<h3></h3>
	                <p></p>
	                <p></p>
					
					
	                
					<h3></h3>
	                <p></p>
	                <p></p>
					
					<h3></h3>
	                <p></p>
	
                
                
            </div><!--End content-->
            
            <div id="projectSidebar"><!--Project list sidebar-->
            
                <p class="sidebarHeader"></p>
                <ul>
                    <li></li>
                </ul>
            
            </div><!--End projectSidebar-->
            
        </div><!--End guts-->
        
        <div class="push"></div><!--Push for aligning footer at bottom of page-->
	
	</div><!--End wrapper-->
	
	<div id="footerContainer">
	
        <div class="footer"><!--Site footer-->
                        
        </div><!--End footer-->
        
    </div><!--End footerContainer-->
	


</body></html>