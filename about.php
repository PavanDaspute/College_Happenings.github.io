<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sass/about.css">
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
        ?>
        
        </head>
        <body>
        <nav>
        <ul>
        <div class="logo"><img src="image/logo.png" alt=""></div>
        <div class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="login.html"><i class="fa-solid fa-circle-user"></i></a></li>
        </ul>
        </nav>


    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
      </div>
      
      <h2>Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="image/s1.jpeg" alt="profile">
            <div class="container">
              <h2>Name</h2>
              <p class="title">Title</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>Collegehappenings@gmail.com</p>
              <button class="button">Contact</button>
            </div>
          </div>
        </div>
      
        <div class="column">
            <div class="card">
              <img src="image/s1.jpeg" alt="profile">
              <div class="container">
                <h2>Name</h2>
                <p class="title">Title</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Collegehappenings@gmail.com</p>
                <button class="button">Contact</button>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="image/s1.jpeg" alt="profile">
              <div class="container">
                <h2>Name</h2>
                <p class="title">Title</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Collegehappenings@gmail.com</p>
                <button class="button">Contact</button>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="image/s1.jpeg" alt="profile">
              <div class="container">
                <h2>Name</h2>
                <p class="title">Title</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Collegehappenings@gmail.com</p>
                <button class="button">Contact</button>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="image/s1.jpeg" alt="profile">
              <div class="container">
                <h2>Name</h2>
                <p class="title">Title</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Collegehappenings@gmail.com</p>
                <button class="button">Contact</button>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="image/s1.jpeg" alt="profile">
              <div class="container">
                <h2>Name</h2>
                <p class="title">Title</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Collegehappenings@gmail.com</p>
                <button class="button">Contact</button>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="image/s1.jpeg" alt="profile">
              <div class="container">
                <h2>Name</h2>
                <p class="title">Title</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Collegehappenings@gmail.com</p>
                <button class="button">Contact</button>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="image/s1.jpeg" alt="profile">
              <div class="container">
                <h2>Name</h2>
                <p class="title">Title</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Collegehappenings@gmail.com</p>
                <button class="button">Contact</button>
              </div>
            </div>
          </div>
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

</html>