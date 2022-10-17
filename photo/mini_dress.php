<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="../CSS/main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Mini dress!</title>
   </head>
   <body>
      <!--TOP hedaer-->
      <?php
         require_once("header.php");
         ?>
      <br><br><br><br>
      <!--Product Grid-->'
      <div class="container">
         <div class="row">
            <?php
               $conn=mysqli_connect("localhost","root","","zara");
               $sql="SELECT * FROM product WHERE category='53'";
               $result=mysqli_query($conn,$sql);
               
               
               
               while($row=mysqli_fetch_array($result)){
               
               
                       
                       echo"<div class='col-md-4'>";
                               echo"<div class='row product-pr'>";
                               echo"<div class='col container-product' >";
                                       echo "<img src='../admin1/upload/product/".$row['image']."'>";
                                       // echo "<img src='../PHOTO/product/mini_dress/5/1.jpg' alt='img' class='image-pr' style='width:100%'>";
                                       echo "<div class='middle-pr'>";
                                               echo"<p><a href='../HTML/productDetail.php?id=".$row['id']."'><button>Shop Now</button></a></p>";
                                       echo"</div>";
                                       echo"<h2 class='dress-code'>".$row['name']."</h2>";
                                       // echo"<p>".$row['description']."</p>";
                                       echo"<p class='p_tag'>".$row['price']."</p>";
                               echo"</div>";
                               echo"</div>";
                       echo"</div>";
                       }
                       
                       ?>
         </div>
      </div>
      <div class="header">
      <div class="box1">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
   </body>
   <?php
      require_once("footer.php");
      ?>
</html>