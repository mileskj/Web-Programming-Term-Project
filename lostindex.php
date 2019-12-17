<!DOCTYPE html>	
<html>
	<head>
	  	<title>Lost Items</title>
		<meta name="viewport" content="initial-scale=1.0">
    	<meta charset="utf-8">
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
		        	<div class="col-md-3"> </div>
			          <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
			          	<h1 class="h1-responsive font-weight-bold mt-sm-5" style="color: white;"> List of Lost Items </h1>
			          	<hr class="hr-light">
				            <?php 
				            	$lines = file('lostlist.txt');
								$search = "LOID#";
								$results = 0;
								clearstatcache();
								if(!filesize('lostlist.txt')) {
						  			echo "No Current Listings";
						  		}
								foreach ($lines as $line) {
									if (strpos($line, $search)!== false){
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
										$userarray[3]= str_replace('+', ' ', $userarray[3]);
										echo '<div class="container containerCatalogue">';
										echo '<strong>Item Lost:</strong> <a href="lostlisting.php?id='.urlencode($userarray[0]).'">'.$userarray[2].'</a><br>';
										if ($userarray[3]!== "NOADD"){
											echo '<strong>Lost at:</strong> '.$userarray[3].'<br>';
										}
										else {
											echo '<strong>Lost at:</strong> Unknown Location<br>';
										}
										echo '</div>';
									}
								}
							?>
			          </div>
		        </div>
		        <div class="col-md-3"> </div>
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
