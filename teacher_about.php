<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sass/teacher_about.css">
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
        $sql = "SELECT * FROM signin Where email='$email'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)):
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

        <button onclick="window.location.href='index.php'"> 
         Logout
        </button>
        </div>
        </div>
        </div>
        <?php endwhile;?>
        </div>
        </div>
        </ul>
        </nav>




        <script>

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() 
        {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() 
        {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) 
        {
        if (event.target == modal) 
        {
        modal.style.display = "none";
        }
        }

        </script>

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