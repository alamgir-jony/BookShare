<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book Share</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a2456d1ab3.js"></script>
    <link rel="stylesheet" href="css/style.css">
  <body>
    <section>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Book Share</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="goal.html">Our Goal <span class="sr-only">(current)</span></a></li>
              <li><a href="reviews.php">Reviews</a></li>
              <li><a href="books.php">Book List</a></li>
              <li> <a href="write_review.php">Write a Review </a> </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Books">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <a href="books.php" class="btn btn-success navbar-btn">Share a Book</a>
              <a href="login.php"><button class="btn btn-success"  data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Login</button></a>
              <button class="btn btn-success"  data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Signup</a></button>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>

    <style>
      #review-form{
        margin-top: 100px;
      }
    </style>
