

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sass/format_report.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<nav>
        <ul>
        <div class="logo"><img src="image/logo.png" alt=""></div>
        <div class="navbar">
        <li><a href="teacher_index.php">Home</a></li>
        <li><a href="teacher_contact.php">Contact</a></li>
        <li><a href="teacher_about.php">About</a></li>
        <li><button id="myBtn"><i class="fa-solid fa-circle-user"></i></button></li>

        <!-- The Modal -->
        <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>

        <?php
        include 'config.php';
        $stmt = $conn->prepare('SELECT * FROM signin Where user_id ="$user_id"');
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()):
        ?>


        <div id="admin_information">
        <div class="inner">
        <div id="admin_image">  
        <img src="<?= $row['profile_img'] ?>" alt="User Photo">
        </div>	

        <div id="admin_details">
        <label>name</label>
        <div class="desc">
        <?= $row['Name'] ?>
        </div>

        <label>email</label>
        <div class="desc">
        <?= $row['Email'] ?>
        </div>

        <label>contact</label>
        <div class="desc">
        <?= $row['contact'] ?>
        </div>

        <label>address</label>
        <div class="desc">
        <?= $row['address'] ?>
        </div>
        </div>
        </div>
        </div>
        <?php endwhile;?>
        </div>
        </div>
        </ul>
        </nav>



    <section>
    <form action="submit.php" method="post" id="placeOrder" enctype="multipart/form-data">

          <label for="">Profile Image</label>
          <input type="file" name="choosefile" value="" />

          <label for="">Name</label>
          <input type="text" name="name" class="form-control" >
          
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" >

          <label for="">Topic</label>
          <input type="text" name="post_topic" class="form-control" >

          <!-- <label for="">Type</label>
          <input type="text" name="post_type" class="form-control" > -->


          <label for="">Type</label>
          <select name="post_type" id="color" >
            <option value="">--- Choose Event Type ---</option>
            <option value="Sport">Sport</option>
            <option value="Educational">Educational</option>
            <option value="Cultural">Cultural</option>
          </select>

          <label for="">Position</label>
          <input type="text" name="teacher_pos" class="form-control" >

          <label for="">Date</label>
          <input type="date" name="date" class="form-control" >

          <label for="">Registration link</label>
          <input type="text" name="reg_link" class="form-control" >

          <label for="">Organized by</label>
          <input type="text" name="org_by" class="form-control" >

          <label for="">Post time</label>
          <input type="time" name="post_time" class="form-control" >

          <input type="submit" name="uploadfile" value="Submit" class="submit-btn">
        </form>
        </section>

    



    <footer class="footer-distributed">
        <div class="footer-left">
          Copyright © 2022 Collegehappenings.com
          <img src="posts/IMG-62654055ce3299.47927083.jpg" alt="">
        </div>
    
      <div class="footer-right">
        <i class="fa fa-youtube" aria-hidden="true"></i>
      </div>
    </footer>
    </body>