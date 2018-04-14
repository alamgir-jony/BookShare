<?php
session_start();
   include 'conn.php';
   include 'common/header.php';
 ?>
 <style media="screen">
   .fas{
     color: #fbaa10;
   }
 </style>
    <section id="reviewtop">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h3 style="color:#446CB3">Top books</h3>
            <ul class="list-group">
              <?php
              $rate = 0;
              $sql = "SELECT * FROM reviewbook where bookname = 'Maa-Anisul Haque'";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              while ($row = mysqli_fetch_array($result)) {
                $rate = $rate+$row['ratings'];
               ?>
            <?php } ?>
            <li class="list-group-item">
              Maa-Anisul Haque
              <span class="badge">
                <?php
                   $rate = floatval($rate/$num);
                   echo $rate.' <i class="fas fa-star"></i>';
                ?>
              </span>
            </li>

            <?php
            $rate = 0;
            $sql = "SELECT * FROM reviewbook where bookname = 'Manobi-Humayun Ahmed'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)) {
              $rate = $rate+$row['ratings'];
             ?>
          <?php } ?>
          <li class="list-group-item">
            Manobi-Humayun Ahmed
            <span class="badge">
              <?php
                 $rate = floatval($rate/$num);
                 echo $rate.' <i class="fas fa-star"></i>';
              ?>
            </span>
          </li>


          <?php
          $rate = 0;
          $sql = "SELECT * FROM reviewbook where bookname = 'Kobi-Humayun Ahmed'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)) {
            $rate = $rate+$row['ratings'];
           ?>
        <?php } ?>
        <li class="list-group-item">
          Kobi-Humayun Ahmed
          <span class="badge">
            <?php
               $rate = floatval($rate/$num);
               echo $rate.' <i class="fas fa-star"></i>';
            ?>
          </span>
        </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 style="color:#446CB3">Top Reviews</h3>
            <ul class="list-group">
              <?php
              $sql = "SELECT * FROM reviewbook where ratings>= 3 order by ratings desc";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {

               ?>
              <li class="list-group-item">
                <span class="badge">
                  <?php
                     for($i=0; $i<$row['ratings']; $i++){
                       echo '<i class="fas fa-star"></i>';
                     }
                  ?>
                </span>
                <b>Book Name:</b> <?php echo $row['bookname']; ?><br>
                <b>Author Name:</b> <?php echo $row['author']; ?><br>
                <?php echo $row['r_desc']; ?>
              </li>
            <?php } ?>
            </ul>
          </div>
          <div class="col-md-6">
            <h3 style="color:#4ECDC4">Reviews</h3>
            <ul class="list-group">
              <?php
              $sql = "SELECT * FROM reviewbook";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {

               ?>
              <li class="list-group-item list-group-item-info">
                <span class="badge star-inner">
                  <?php
                     for($i=0; $i<$row['ratings']; $i++){
                       echo '<i class="fas fa-star"></i>';
                     }
                  ?>
                </span>
                Book Name:<?php echo $row['bookname']; ?> <br>Author:<?php echo $row['author']; ?> <br><?php echo $row['r_desc']; ?> <br>
                <a href="reviewdetails.php" class="btn btn default"></a>
              </li>
                <?php } ?>
          </div>
        </div>
      </div>
    </section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
