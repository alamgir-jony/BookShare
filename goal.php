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
            <a class="navbar-brand" href="index.php">Book Share</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="goal.html">Our Goal <span class="sr-only">(current)</span></a></li>
              <li><a href="reviews.php">Reviews</a></li>
              <li><a href="books.php">Book List</a></li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Books">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <a href="sharebook.html" class="btn btn-success navbar-btn">Share a Book </a>
              <button class="btn btn-success"  data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Login</a></button>
              <button class="btn btn-success"  data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Signup</a></button>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>
    <div class="container text-center ">
      <h3>Our Goal</h3>
      <p class="text-left">“Book Share” is a web based book sharing site. This is a website for the book lovers. Anyone can register to the website with his information specially his location and a valid id. Here we will consider a registered user as a “reader’ .A reader can find other by other reader’s location and book choice category. A reader can share his book list to the website and he can also marked his books to be sold. Interested reader can rent a book from his nearest reader and he can also buy old books from a reader. Now a question can be raised up. Why a reader buy old books? At first we want to a say about the financial condition of the country people. The big advantages of the project is to build up a network of readers. We have a special option to all of the visitors of the website. Reader can post a book review and any visitors can see that. And also make comment after creating an account. At the end of the week, month and year it generates the list of top reviewed books.</p>
      <h3>Proposed Activities:</h3>
      <ul class="text-left">
        <li>Book sharing option</li>
        <li>Book selling option</li>
        <li>Review system</li>
        <li>Top books list</li>
      </ul>
    </div>
  </body>
</html>
