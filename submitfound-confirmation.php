<!DOCTYPE html>
<html>
	<head>
		<title>FOUND@UGA</title>
		<meta charset="utf-8" />
		
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

		  <?php 
			$name = $_POST["name"];
			$email = $_POST["email"];
			$location = $_POST["location"];
			$description = $_POST["description"];
			$item = $_POST["item"];
			$id = "FOID#000003";
			$loc = '';

			/*Checking if theres no location or if they pressed NOADD*/
			if($location == '' || $location == "NOADD") {
				$loc = "NOADD";
			} elseif (strpos($location, ',') !== false) {
				/* Checking the location tag and getting rid of any spaces and replacing them with pluses */
    			$subIndex = strpos($location, ',');
    			$loc = substr($location, 0, $subIndex);
    			$loc = str_replace(' ','+',$loc);
    			$loc = $loc . ",Athens,GA";
			}
			
			$myfile = fopen("foundlist.txt", "a+") or die("Unable to open file!");
			$submitInfo = "\r\n" . $id . "|" . $name . "|" . $item . "|" . $loc . "|" . $description . "|" . $email;
			fwrite($myfile, $submitInfo);
			fclose($myfile);

		?>

		  <div class="view viewNonIndex" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
		    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-12 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
		          	<h1 class="h1-responsive font-weight-bold mt-sm-5" style="color: white"> Thank you for your submission! </h1>
		          	<hr class="hr-light">
		            <h6 class="mb-4">Your item was just added to the index of found items. Click the button below to go to the Found Items List.</h6>
		            <a class="btn btn-outline-white" role="button" href="foundindex.php">Found Items List</a>
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