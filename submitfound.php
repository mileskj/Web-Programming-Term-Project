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

		  <div class="view viewNonIndex" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
		    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-12 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
		          	<h1 class="h1-responsive font-weight-bold mt-sm-5" style="color: white"> Submit your found item here </h1>
		          	<hr class="hr-light">
		            <form action="submitfound-confirmation.php" method="post" id="mainForm" style="color: white">
		            	<div class="form-group">
		            		<label for="name">Name:</label>
   							<input type="name" class="form-control" name="name" placeholder="ex: John Smith">
		            	</div>
		            	<div class="form-group">
		            		<label for="email">Item Found:</label>
   							<input type="item" class="form-control" name="item" placeholder="Name of item lost">
		            	</div>
		            	<div class="form-group">
		            		<label for="email">Email:</label>
   							<input type="email" class="form-control" name="email" placeholder="Enter Email">
		            	</div>
		            	<div class="form-group">
		            		<label for="location">Location:</label>
   							<input type="location" class="form-control" name="location" placeholder="ex: Tate Center,Athens,GA , if no location then type NOADDR">
		            	</div>
		            	<div class="form-group">
		            		<label for="item description">Item Description:</label>
   							<input type="description" class="form-control" name="description" placeholder="Enter a brief description of the item you found.">
		            	</div>
		            	<button type="submit" class="btn btn-primary" style="background-color: #4F4F4F; border-color: #4F4F4F">Submit</button>
		            </form>
		          </div>
		        </div>
		      </div>
		    </div>		
		  </div>

			<!-- Footer -->
		  <div class="container">
            <div class="row py-5">
              <div class="col-md-12 text-center">
                <p>If you have any questions or need support, contact us at foundatuga@gmail.com. Created by Andrew Alexander, Miles Jordan, Saurav</p>
              </div>
            </div>
          </div>
		  

		<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

</html>