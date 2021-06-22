<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="1.css">

        <script src="dummy.js" async></script>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 260px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


   <div style= "background-color:whitesmoke">
    <br><br>
  </div>

  <div>
   <h1> CG COMMUNITY
      <div class="first"> One stop solution for all your curls</div>
   </h1>

   <div class="topnav">
     <a class="active" href="1.html">Home</a>
     <a href="identify.html">Identify Your Hair Type</a>
     <a href="routine.html">CG Routine</a>
     <a href="curly tales.php">Curly Tales</a>
     <a href="products.html">CG Friendly Products</a>
     <a href="review1.php">Product Review</a>
     <a href="buy.php">Exchange your products</a>
    <a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:20px"></i> Cart</a>
    <a href="orders.php"> Orders</a>
    <a href="sell items.php">Sold items</a>
     
     
     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login1.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div>
      <center><img src="dont give up.jpg" style="width:500px; height:600px;"></center>
    </div>
    
    <div class="container">
      <div>
      <center>
      <h4 style="font-family:  Marker Felt, fantasy;font-size: 40px;color:Indigo;"> Log in </h4>
      <div style="font-family: Marker Felt, fantasy; font-size: 25px; color:DeepPink;"> Welcome to the CG Community!</div>
      <b style="font-family: Marker Felt, fantasy; font-size: 25px; color:DeepPink;">Please login to confirm your registration</b>
    </center>

      
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
        <span class="psw"> <a href="#"> Dont remember?</a>
     </span>   

    <div class="container" style="background-color:#f1f1f1">
      
    </div>
  </div>
  
    
  </form>
 </div>

 <script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/sign up.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div>
      <center><img src="sign up 1.jpg" style="width:500px; height:700px;"></center>
    </div>
    
    <div class="container">
      <div>
      <center>
      <h4 style="font-family:  Marker Felt, fantasy;font-size: 40px;color:Indigo;">Sign Up</h4>
      <div style="font-family: Marker Felt, fantasy; font-size: 25px; color:DeepPink;"> Welcome to the CG Community!</div>
    </center>
      
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Register</button>

    <div class="container" style="background-color:#f1f1f1">
      
    </div>
  </div>
   </div>
    </div>
  </form>
</div>

<script>

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    
  </div>



  <hr>
  <div class="row">

     <div class="about">
        <h2 style="font-family:Snell Roundhand, cursive; ">Buy Products</h2>
        <p>
          Want to buy CG friendly products at a lesser cost? Buy from your fellow community members!
        </p>
      </div>
      <br><br><br>

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1</div>
      <img src="buy1.jpg" style="width:100%">
    </div>

</div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    
  </div>
  <br>



  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }

    function oki(name)
    {

    }
  </script>


<center>
     <div class="column">
        <div style="width:1400px;" class="options">
         <a style="font-size:20px;  text-align:center; font-family:Bookman, URW Bookman L, serif;  font-weight:bold; align-items:center; color:DeepPink;" href="sell.php">Want to sell your CG friendly producst?</a>
         <a  style="font-size:18px; color:white; background-color:Indigo;">Some times we buy new products after spending a bomb only to realise that it doesnt suit our hair. However, there are many whom the product suits.Simply sell it to them at a lower price!</a>
       </div>
      </div>
  </center>
          </div>



<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

<br>
<br>
 <div><img src="ex1.jpg" style="width:25%"><img src="ex2.jpg" style="width:25%"><img src="ex3.jpg" style="width:25%"><img src="ex4.jpg" style="width:25%"></div>
<br>
<br>
<br><br><br>
<?php

$db = mysqli_connect("localhost","root","","curly");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$records = mysqli_query($db,"select * from sell"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<br><br><br>

  <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $data['name']; ?></span>
                    <img class="shop-item-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['pic']); ?>" width="200" height="200">
                    <div class="card">
                      <p><?php echo $data['reason']; ?></p>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rs.<?php echo $data['price']; ?></span><br>
                        <button class="btn btn-primary shop-item-button" type="button"><a href="ex1.php?id=<?php echo $data['name'] ?>&id1=<?php echo $data['price']?>"><br>ADD TO CART</a></button>
                    </div>
                </div>
               
            </div>


<?php
}
?>

<br><br>
 
<section></section>

<button type="button"><a href="cart.php" style="color:white;">DISPLAY CART</a></button>
</section>

</center></div>

<div style="background-color:indigo;text-align:center;padding:10px;margin-top:7px;color:deeppink;">&copyCgCommunity.co </div>


</body>
</html>