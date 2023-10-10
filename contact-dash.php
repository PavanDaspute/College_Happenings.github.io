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
</head>

<body>
<nav>
        <ul>
        <div class="logo"><img src="image/logo.png" alt=""></div>
        <div class="navbar">
        <li><a href="teacher_index.php"> Home</a></li>
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