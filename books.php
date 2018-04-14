<?php
   session_start();
   include 'common/header.php';
 ?>
 <style media="screen">
   #booklist img{
     height: 250px;
     margin: 0 auto;
   }
   .col-md-3{
     border: 1px solid #555;
     padding: 10px;
   }
 </style>

 <div class="container" id="booklist">
   <h2 class="text-center">All Books</h2>
   <div class="row">
     <div class="col-md-3">
       <h4>Manobi-Humayun Ahmed</h4>
       <img src="imgs/manobi.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Maa-Anisul Haque</h4>
       <img src="imgs/maa.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Kobi-Humayun Ahmed</h4>
       <img src="imgs/kobi.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Jol Jochona-Humayun Ahmed</h4>
       <img src="imgs/jol.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
   </div>

   <div class="row">
     <div class="col-md-3">
       <h4>Paradoxical Sajid-Arif Azad</h4>
       <img src="imgs/sajid.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Aroj Ali Somipe-Arif Azad</h4>
       <img src="imgs/aroj.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Himu Rimande-Humayun Ahmed</h4>
       <img src="imgs/rimand.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Ebong Himu-Humayun Ahmed</h4>
       <img src="imgs/ebong.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
   </div>

   <div class="row">
     <div class="col-md-3">
       <h4>Debdas-Saratchandra</h4>
       <img src="imgs/sorot.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Geetanjali-Rabindranath Tagore</h4>
       <img src="imgs/geetanjali.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Hajar Bochor Dhore-J. Rayhan</h4>
       <img src="imgs/hajar.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
     <div class="col-md-3">
       <h4>Ami Topu-Mohammad Jafar Iqbal</h4>
       <img src="imgs/topu.jpg" alt="" class="img-responsive">
       <p></p>
       <a href="write_review.php" class="btn btn-success">Write a review</a>
       <!-- <a href="#" class="btn btn-primary">Buy</a> -->
     </div>
   </div>
<!--
   <div class="row" style="margin-top:30px;">
     <div class="col-md-3">
       <h4>Name of book</h4>
       <img src="imgs/book1.jpg" alt="" class="img-responsive">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
       <a href="#" class="btn btn-success">Write a review</a>
     </div>
     <div class="col-md-3">
       <h4>Name of book</h4>
       <img src="imgs/book2.jpg" alt="" class="img-responsive">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
       <a href="#" class="btn btn-success">Write a review</a>
     </div>
     <div class="col-md-3">
       <h4>Name of book</h4>
       <img src="imgs/book3.jpg" alt="" class="img-responsive">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
       <a href="#" class="btn btn-success">Write a review</a>
     </div>
     <div class="col-md-3">
       <h4>Name of book</h4>
       <img src="imgs/book4.jpg" alt="" class="img-responsive">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
       <a href="#" class="btn btn-success">Write a review</a>
     </div>
   </div> -->
 </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
