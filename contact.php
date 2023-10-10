<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sass/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
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


    <div class="container">
        <div class="form-container">
            <div class="left-container">
                <div class="left-inner-container">
                    <h2>Let's Chat</h2>
                    <p>Whether you have a question or simply want to connect.</p>
                    <br>
                    <p>Feel free to send me a message in the contact form</p>
                </div>
            </div>
            <div class="right-container">
                <div class="right-inner-container">
                    <form action="#">
                        <h2 class="lg-view">Contact</h2>
                        <h2 class="sm-view">Let's Chat</h2>
                        <input type="text" placeholder="Name" required/>
                        <input type="email" placeholder="Email" required/>
                        <input type="text" placeholder="Branch" required/>
                        <input type="phone" placeholder="Phone" required/>
                        <textarea rows="4" placeholder="Message" required></textarea>
                        <button>Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>