<?php
  session_start();
  include('conn.php');
  if (!isset($_SESSION['student'])) {
    header('location:profile.php');
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Student Profile</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="header">
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
		      <a class="navbar-brand" href="#">
		      	Student Profile
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="index.php">Home</a></li>
		        <li><a href="#">Profile</a></li>
		        <li><a href="result.html">Result</a></li>
		        <li><a href="index.html">Log Out</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
    </div>

    <?php
       $sql = "SELECT * FROM student WHERE sid ='{$_SESSION['student']}' ";
       $result = mysqli_query($conn,$sql);
       while ($row = mysqli_fetch_assoc($result)) {

     ?>
    <div id="profileinfo">
      <div class="container">
        <div class="col-md-4 text-center">
            <img class="jonypic" src="img/<?php echo $row['image'] ?>" alt="">
            <form class="" action="" method="post">
              <a href="editprofile.php"><button class="btn btn-default edit-pro" type="button" name="button">Edit</button></a>
            </form>
        </div>
        <div class="col-md-8">
          <table>
            <tr>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <td>Name</td>
              <td><?php echo $row['Name']; ?></td>
            </tr>
            <tr>
              <td>ID</td>
              <td><?php echo $row['sid']; ?></td>
            </tr>
            <tr>
            <td>Email</td>
           <td><?php echo $row['Email']; ?></td>
            </tr>
            <tr>
              <td>Department</td>
            <td><?php echo $row['Department']; ?></td>
            </tr>
            <tr>
              <td>Birthday</td>
              <td><?php echo $row['Birthday']; ?></td>
            </tr>
            <tr>
              <td>Mobile Number</td>
              <td><?php echo $row['Mobile']; ?></td>
            </tr>
            <tr>
              <td>Fathers Name</td>
              <td><?php echo $row['Fname']; ?></td>
            </tr>
            <tr>
              <td>Mothers Name</td>
              <td><?php echo $row['Mname']; ?></td>
            </tr>
            <tr>
              <td>Gurdians Number</td>
              <td><?php echo $row['Gnumber']; ?></td>
            </tr>
            <td>Permanent Address</td>
              <td><?php echo $row['Paddress']; ?></td>
            <tr>
              <tr>
                <td>Present Address</td>
                  <td><?php echo $row['Peraddress']; ?></td>
              </tr>
          </table>

        </div>
      </div>
    </div>
    <?php } ?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
