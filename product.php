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

  <body style="background-color: white;">

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



   
  

  

          <div class="container-fluid">
          <div class="row" >

          <?php
               $conn=mysqli_connect('localhost','root','','tiyana');
       
               $sql="SELECT * FROM product";
               $result=mysqli_query($conn,$sql);
               
               
               $a=0;
               while($row=mysqli_fetch_array($result)){
                  if ($a < 6) {
  
               ?>
               

         <div class='col-lg-3 col-md-4 mb-3 ml-5 mr-5 mt-5'>
          <div class='card h-100'> 
          <a href='#'><img class='card-img-top' src="photo/product/<?php echo $row['image'] ?>"></a>
         <div class='card-body'>
            <h4 class='card-title'>
                   <a href='#'></a>
               <h4><?php echo $row['price'] ?></h4> 
                 <h5><?php echo $row['price'] ?></h5> 
                 <p class='card-text'><?php echo $row['name'] ?></p>
                </div> 
                <div class='card-footer'>
                 <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small> 
              </div>
              </div>
            </div>
          
    <?php
            }else{ ?>

              <div class='col-lg-3 col-md-4 mb-3 ml-5 mr-5 mt-5' class="myDIV" >
              <div class='card h-100'> 
          <a href='#'><img class='card-img-top' src="photo/product/<?php echo $row['image'] ?>"></a>
         <div class='card-body'>
            <h4 class='card-title'>
                   <a href='#'></a>
               <h4><?php echo $row['price'] ?></h4> 
                 <h5><?php echo $row['price'] ?></h5> 
                 <p class='card-text'><?php echo $row['name'] ?></p>
                </div> 
                <div class='card-footer'>
                 <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small> 
              </div>
              </div>
            </div>

         <?php   }
            $a++;
               }
    ?>
        </div>
            <input type="button" id="answer" value="Show Div" onclick="myFunction()" />
          </div>
    </div>

  


      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      


  </body>

</html>