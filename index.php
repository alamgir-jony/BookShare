<?php
  include 'conn.php'; // Database connection
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book Share</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  <body>
    <section>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Book Share</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="goal.html">Our Goal <span class="sr-only">(current)</span></a></li>
              <li><a href="reviews.php">Reviews</a></li>
              <li><a href="books.php">Book List</a></li>
              <li> <a href="login.php">Write a Review </a> </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Books">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <a href="index.php" class="btn btn-success navbar-btn">Share a Book </a>
              <a href="login.php"><button class="btn btn-success"  data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Login</button></a>
              <button class="btn btn-success"  data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Signup</a></button>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <br>
            <br>
            <br>
            <h1>Welcome To Book Share-</h1>
            <h3>"Enjoy Another World With Books"</h3>
            <br>
            <h4>Here You Can:</h4>
            <ul>
              <li>Share a book</li>
              <li>Write a review</li>
              <li>Find a book lover</li>
            </ul>
            <br>
            <br>
            <h4>Book Catagories Are:</h4>

            <div class="alert alert-success" role="alert">
              Comedy
            </div>
            <div class="alert alert-success" role="alert">
              Drama
            </div>
            <div class="alert alert-success" role="alert">
              Horror Fiction
            </div>
            <div class="alert alert-success" role="alert">
              Romance
            </div>
            <div class="alert alert-success" role="alert">
              Fantasy
            </div>
            <div class="alert alert-success" role="alert">
              Tragedy
            </div>
            <div class="alert alert-success" role="alert">
              Adventure
            </div>
          </div>

          <div class="col-md-3">
            <img class="map-img" src="imgs/booklogo.png" alt="Bangladesh Map">
          </div>

          <div class="col-md-3">
            <br>
            <br>
            <br>
            <br>
            <h4>Reader From Your City</h4>

            <div class="alert alert-success" role="alert">
              Dhaka
            </div>
            <div class="alert alert-success" role="alert">
              Chittagong
            </div>
            <div class="alert alert-success" role="alert">
              Comilla
            </div>
            <div class="alert alert-success" role="alert">
              Sylhet
            </div>
            <div class="alert alert-success" role="alert">
              Rajshahi
            </div>
            <div class="alert alert-success" role="alert">
              Khulna
            </div>
            <div class="alert alert-success" role="alert">
              Barisal
            </div>
            <br>
            <h4>Division</h4>

            <div class="alert alert-success" role="alert">
              Dhaka
            </div>
            <div class="alert alert-success" role="alert">
              Chittagong
            </div>
            <div class="alert alert-success" role="alert">
              Sylhet
            </div>
            <div class="alert alert-success" role="alert">
              Rajshahi
            </div>
            <div class="alert alert-success" role="alert">
              Khulna
            </div>
            <div class="alert alert-success" role="alert">
              Barisal
            </div>

            </div>
            </ul>


          </div>
        </div>
      </div>
    </section>
    <div class="hr-line"></div>


    <section id="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
            <h4>Our Adress:</h4>
            <p>Dhanmondi, Dhaka <br>Contact Number:01515000000 <br>Email:bookshare@gmail.com </p>
          </div>
          <div class="col-md-6">
            <ul>
              <h4>Follow Us On :</h4>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12 text-center">
            &copy; 2018 @Md. Alamgir Hossain
          </div>
        </div>
      </div>
    </section>

<!-- login Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" placeholder="Enter Your Username" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" placeholder="Enter Your Password" class="form-control">
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--sign up  -->
<!-- Modal -->
<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration</h4>
        <p class="regalert">*Please Use Valid Information</p>


      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label>User Name</label>
            <input type="name" name="name" placeholder="Enter Your Name" class="form-control">
          </div>
          <div class="form-group">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="emil" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label>Contact Number</label>
              <input type="number" name="number" placeholder="Enter Your Mobile Number" class="form-control">
            </div>
            <label>Location</label>
            <input type="name" name="location" placeholder="Enter Your Location(eg. Dhanmondi)" class="form-control">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter A Password" class="form-control">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password" placeholder="Type Again Your Password" class="form-control">
          </div>
          <button type="submit" name="signup" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
