---- Include the above in your HEAD tag ---------->
<?php
    $conn=mysqli_connect('localhost','root','','tiyana');
  
   
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
 
        $(document).ready(function(){
          $("button").click(function(){
            $(".myDIV").hide();
          });
        });
</script>




    <style>


</style>
  

  </head>

  <body>
	  

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid" >
        <a class="navbar-brand" href="#" style="font-family: 'Times New Roman', Times, serif; letter-spacing:0.8rem; font-size:40px;color:yellow; font-size: 3rem;">TIYANA.LK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" style="font-family:Times New Roman;color:yellow;">
            <li class="nav-item active" style="font-family:Times New Roman;">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li>

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Catergory
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>

              </div>
            </li>
            <li style="padding-left:40px;">
              <a href="photo/login_&_registration.php"><i class="fa fa-user fa-2x"></i></a>
                  <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                  <a href=""><i class="fa fa-sign-out fa-2x"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




<br><br>
  <?php
 

 if(isset($_POST['add_product'])){
	if(isset($_SESSION['uid'])){
   
	// echo "Form submitted";
	//getting the data
	$pid=$_GET['id'];
	$uid=$_SESSION['uid'];
	$date="2022-10-14 13.02";
	

	   $sql="INSERT INTO shopping_cart(customer_id,product_id,date_and_time) VALUES('$uid','$pid','$date')";
		 $res=mysqli_query($conn,$sql);

			 if($res){
			  
				 echo  "<script type=\"text/javascript\">
				 Swal.fire('Added!!',
					   'Product is added to the cart',
					   'success'
				 )
			   </script>";
			   header("location:cart.php");
			 }
			 else{
			   echo "<script>
				 swal({
				 title: 'Error',
				 text: 'product didnot add!',
				 icon: 'warning',
				 button: 'Ok',
				 });
			   </script>";
			 }
			 
	}else{
		echo  "<script type=\"text/javascript\">
                         Swal.fire('Login First!!',
                               'To Use Fhis Feature Please Login',
                               'info'
                         )
                       </script>";

	}

 }

  ?>

  <div class="bg-dark">
	<?php
 //  include("navigationbar.php");
    ?>
	</div>


	<form  method="post">
            <?php
               
                   if(isset($_GET['id'])){
                     $pid=$_GET['id'];
                     $sql="SELECT * FROM product WHERE id='$pid'";
                     $res=mysqli_query($conn,$sql);
               
                     $row=mysqli_fetch_assoc($res);

				   	}

					 ?>
	
	<div class="container">
  
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
					<?php

					$i=2;
								$sql1="SELECT * FROM product WHERE id=$i";
								$res1=mysqli_query($conn,$sql1);
							
								$row=mysqli_fetch_assoc($res1);
								

								
								?>
								
						<div class="preview-pic tab-content">
							
						  <div class="tab-pane active" id="pic-1"><img class='card-img-top' src="photo/product/<?php echo $row['image'] ?>" /></div>

						</div>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $row['name']; ?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description-p"><?php echo $row['description']; ?></p><br>
						<h5 class="price">current price: <label><?php echo $row['price']; ?>.00</label></h5>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
                        <button type="button" class="btn btn-dark">32</button>
                        <button type="button" class="btn btn-dark">34</button>
						
						</h5>
						
						<div class="action">
                            <input type="number" id="quantity" name="quantity" min="1" max="10"> <br>
							<br>
                            
							<form method="post"><input class="add-to-cart btn btn-default bg-danger text-white" type="submit" value="Add to cart" name="add_product"></form>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</form>

	

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>

