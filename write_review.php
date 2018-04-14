<?php
   session_start();
   include 'conn.php';
   if (isset($_POST['submit'])) {
     $title = $_POST['title'];
     $author = $_POST['author'];
     $rdesc = $_POST['desc'];
     $rating = $_POST['rating'];
     $query = "INSERT INTO `reviewbook`(`bookname`, `author`, `r_desc`,`ratings`) VALUES ('$title', '$author', '$rdesc','$rating')";
     $sql = mysqli_query($conn,$query);
     if (!$sql) {
       echo "error in savng review";
     } else {
       header('location: reviews.php');
     }
   }
   include 'common/header.php';

   // if (isset($_POST['name'])) {
   //   $bookname = $_POST['name'];
   //   $query = "select author from books where name = '$bookname'";
   //   $result = mysqli_query($conn, $query);
   //   if ($result) {
   //     while ($row = mysqli_fetch_assoc($result)) {
   //       echo (string)$row['author'];
   //     }
   //   }
   // }
 ?>
 <style media="screen">
 ul{
   padding: 0;
   margin: 0;
 }
   .ratings ul li{
     list-style: none;
     display: inline-block;
     color: #fff;
     text-shadow: 2px 2px 7px grey;
     font-size: 25px !important;
     margin: 0 8px 0 8px;
     cursor: pointer;
   }
   .ratings ul li:hover{
     color: #fbaa10;
   }
   .ratings ul li.active, .ratings ul li.secondary-active{
     color: #fbaa10;
   }
   .active{
     color: #fbaa10;
   }
   input[type="radio"]{
     display: none;
   }

 </style>
  <div id="review-form">
    <div class="container">
      <form action="write_review.php" method="post">
        <div class="form-group">
          <select class="form-control" name="title" id="bookname">
            <option value="null">Select Book</option>
            <?php
               $query = 'select * from books';
               $result = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_assoc($result)) {

             ?>
            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="ratings">
          <label style="color:red">*Rate between 1-5</label>
          <ul>
            <li class="star"><label for="rating_1"><i class="fa fa-star" aria-hidden="true"></i> <input type="radio" id="rating_1" name="rating" value="1"></label></li>
            <li class="star"><label for="rating_2"><i class="fa fa-star" aria-hidden="true"></i> <input type="radio" id="rating_2" name="rating" value="2"></label></li>
            <li class="star"><label for="rating_3"><i class="fa fa-star" aria-hidden="true"></i> <input type="radio" id="rating_3" name="rating" value="3"></label></li>
            <li class="star"><label for="rating_4"><i class="fa fa-star" aria-hidden="true"></i> <input type="radio" id="rating_4" name="rating" value="4"></label></li>
            <li class="star"><label for="rating_5"><i class="fa fa-star" aria-hidden="true"></i> <input type="radio" id="rating_5" name="rating" value="5"></label></li>
          </ul>
          <!-- <input type="number" name="ratings" class="form-control" id="rating" step="0.1" max="5" placeholder="Rate 1-5"> -->
        </div>
        <div class="form-group">
          <label>Author Name</label>
          <input type="text" name="author" class="form-control" placeholder="author name.." id="author">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="desc" class="form-control" placeholder="Description.."></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script>
     $(document).ready(function(){
       $('#bookname').on('change', function(){
         var name = $('#bookname').val();
         var book = name.split('-')[1];
         $('#author').val(book);
       });
     });



     $('.star').on('click', function(){
       $('.star').removeClass('active');
       $('.star').removeClass('secondary-active');
       $(this).addClass('active');
       $(this).prevAll().addClass('secondary-active');
     });
  </script>
