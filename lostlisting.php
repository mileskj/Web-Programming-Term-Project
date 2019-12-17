<!DOCTYPE html>	
<html>
	<head>
	  	<title>Lost Items</title>
		<meta name="viewport" content="initial-scale=1.0">
    	<meta charset="utf-8">
    	<link href="logo.gif" type="image/gif" rel="shortcut icon" />
    	<link href="logo.gif" type="image/gif" rel="shortcut icon" />
    			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="styles.css" type="text/css" rel="stylesheet" />
		<script>
			new WOW().init();
		</script>
    </head>
	<body>
		<!--Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
		    <div class="container">
		      <a class="navbar-brand" style="color: white">
		        <img src="fauicon.png" alt="F@UGA Icon" >
		      </a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
		        <ul class="navbar-nav mr-auto">
		          <li class="nav-item active">
		            <a class="nav-link" href="index.html">Home
		              <span class="sr-only">(current)</span>
		            </a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="lostindex.php">Lost Items</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="foundindex.php">Found Items</a>
		          </li>
		        </ul>
		      </div>
		    </div>
		  </nav>

		  <div class="view viewNonIndex" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
		    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
		      <div class="container">
		        <div class="row">
		        	<div class="col-md-3"></div>
		         	<div class="col-md-3 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s" style="color: white">
		          	
		            	<?php 	$lines = file('lostlist.txt');
							$subject = $_GET["id"];
							foreach ($lines as $line) {
								if (strpos($line, $subject)!== false){
									$divis = '|';
									$pos = 0;
									$next = 0;
									$prev = 0;
									$i = 0;
									$loops = 0;
									$numcomm = substr_count($line, $divis);
									while ($loops<=$numcomm){
										$next = strpos($line, $divis, $next);
										if ($next!==false){
											$userarray[$i] = substr($line,$pos,$next-$prev);
											$prev=$next+1;
											$pos=$next+1;
											$i++;
											$loops++;
											$next++;
										}
										else {
											$loops++;
											$userarray[$i]=substr($line, $pos);	
										}
									}
									echo '<h1 class="h1-responsive font-weight-bold mt-sm-5" style="color: white">'.$userarray[2].'</h1> <strong>Lost By:</strong> '.$userarray[1].'<br><strong>Email at:</strong> '.$userarray[5].'<br> <strong>Item Description:</strong> '.$userarray[4].'<br> <a class="btn btn-outline-white" role="button" href="lostindex.php">Lost Items List</a>';
									if ($userarray[3]!== "NOADD"){
										$tempAddress= str_replace('+', ' ', $userarray[3]);
										echo '</div> <div class="col-md-3" style="color: white; text-align: center; margin: auto;"><strong>Lost at: </strong>'.$tempAddress.'<br><img src="https://maps.googleapis.com/maps/api/staticmap?center='.$userarray[3].'&zoom=15&size=250x250&markers=color:red%7Clabel:F%7C'.$userarray[3].'&key=donezo"></div>';
									}
									else {
										echo '</div> <div class="col-md-3" style="color: white; text-align: center; margin: auto;"> Lost at unknown location</div>';
									}
								}
							}
					 	?>
					 	<div class="col-md-3"></div>
		          </div>

		        </div>

		      </div>
		    </div>		
		  </div>

		<div class="container">
            <div class="row py-5">
              <div class="col-md-12 text-center">
                <p>If you have any questions or need support, contact us at foundatuga@gmail.com. Created by Andrew Alexander, Miles Jordan, Saurav</p>
              </div>
            </div>
          </div>
	</body>
</html>
