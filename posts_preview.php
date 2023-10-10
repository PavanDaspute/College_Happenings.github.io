<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sass/after_posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <?php 
    include('login.php');  
    $con=mysqli_connect("localhost","root","","college_happenings");
    $Name = $_SESSION['name'];
    $email= $_SESSION['email'];  
    $id = $_SESSION['id'];
    ?>
</head>

<body>
   <nav>
        <ul>
        <div class="logo"><img src="image/logo.png" alt=""></div>
        <div class="navbar">
        <li><a href="index.php"> Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="login.html"><i class="fa-solid fa-circle-user"></i></a></li>        
      </ul>
    </nav>

    <section>
    <?php
  			        include 'config.php';
                $id =intval($_GET['id']);           
                $sql = "SELECT * FROM posts Where id=$id";
                $result = mysqli_query($conn, $sql);
                // Associative array
                $row = mysqli_fetch_assoc($result);
              
          ?>


      <div class="container-1">
        <div class="img">
          <img src="image/clg-logo.png" alt="">
        </div>
      </div>

      <div class="container-2">
        <h1>M.S.P Mandals</h1>
        <h2>Deogiri College, Aurangabad</h2>
        <br>
        <h3>Event On</h3>
      </div>

      <div class="container-3">
        <i class="fa fa-quote-left" aria-hidden="true"></i><?= $row['post_topic'] ?><i class="fa fa-quote-right" aria-hidden="true"></i>
      </div>
      
      <div class="container-4">
        <img src="<?= $row['post_profile'] ?>" alt="">
      </div>

      <div class="container-5">
        <div class="name"><?= $row['name'] ?></div>
        <div class="position"><?= $row['teacher_pos'] ?></div>
      </div>

      <div class="container-6">

        <div class="schedule">
        <div class="duration">
          DATE : &nbsp;
          <div class="date-oraganize">
            <div class="date"><?= $row['date'] ?></div>
          </div>
        </div>

        <div class="duration">
          TIME :&nbsp;
          <div class="date-oraganize">
          <?= $row['time'] ?>
          </div>
          <div class="time"></div>
        </div>
      </div>

        <div class="link">
          Registration Link: <span><?= $row['reg_link'] ?></span>
        </div>
        <div class="organized">
          Organized by : <?= $row['org_by'] ?>
        </div>
      </div>
    </section>
    <div class="submit">
    <button onclick="window.print();" class="download">Download</button>
  </div>

    



    <footer class="footer-distributed">
        <div class="footer-left">
          Copyright © 2022 Collegehappenings.com
        </div>
    
      <div class="footer-right">
        <i class="fa fa-youtube" aria-hidden="true"></i>
      </div>
    </footer>
    </body>