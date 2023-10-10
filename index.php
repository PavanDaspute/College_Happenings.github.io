
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sass/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <?php 
    include('login.php');  
    $con=mysqli_connect("localhost","root","","college_happenings");
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



    <div class="first-container">
        <?php
        include 'config.php';
        $stmt = $conn->prepare("SELECT * FROM posts");
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()):
              ?>
        <div class="arrow arrow-left"><i class="fa-solid fa-angle-left"></i></div>
        <div class="inner-container-img">
            <div class="desc-container">
                <div class="inner-desc">
                    <h2><?= $row['post_topic'] ?></h2>
                    <h4><?= $row['org_by'] ?></h4>

                </div>
            </div>
            <img src="<?= $row['post_profile'] ?>" alt="">
        </div>

        
        
        <div class="arrow arrow-right"><i class="fa-solid fa-angle-right"></i></div>
        <div class="dots">
            <div class="dot">
                <i class="far fa-dot-circle"></i>
            </div>
            <div class="dot">
                <i class="far fa-circle"></i>
            </div>
            <div class="dot">
                <i class="far fa-circle"></i>
            </div>
        </div>
        <?php endwhile;?>
    </div>

    <script>
        const imgs = document.querySelectorAll(".inner-container-img");
        const dots = document.querySelectorAll(".dot i");
        const leftArrow = document.querySelector(".arrow-left");
        const rightArrow = document.querySelector(".arrow-right");

        let currentIndex = 0;
        let time = 5000;

        const defClass = (startPos, index) => {
            for (let i = startPos; i < imgs.length; i++) {
                imgs[i].style.display = "none";
                dots[i].classList.remove("fa-dot-circle");
                dots[i].classList.add("fa-circle");
            }
            imgs[index].style.display = "block";
            dots[index].classList.add("fa-dot-circle");
        };

        defClass(1, 0);

        leftArrow.addEventListener("click", function () {
            currentIndex <= 0 ? (currentIndex = imgs.length - 1) : currentIndex--;
            defClass(0, currentIndex);
        });

        rightArrow.addEventListener("click", function () {
            currentIndex >= imgs.length - 1 ? (currentIndex = 0) : currentIndex++;
            defClass(0, currentIndex);
        });

        const startAutoSlide = () => {
            setInterval(() => {
                currentIndex >= imgs.length - 1 ? (currentIndex = 0) : currentIndex++;
                defClass(0, currentIndex);
            }, 6000);
        };

        startAutoSlide();

    </script>

    <div class="recent">Posts</div>
    <div class="second-container">
    <?php
    include 'config.php';
    $stmt = $conn->prepare("SELECT * FROM posts");
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()):
  		?>

        <div class="card">

        <?php
        require 'config.php';

        if (isset($_GET['clear'])) {
        $stmt = $conn->prepare("DELETE FROM posts Where id='$id'");
        $stmt->execute();
        }
        ?>

            <div class="inner-card">
                <img src="<?= $row['post_profile'] ?>" alt="">
                <a href="posts_preview.php?id=<?= $row['id'] ?>"><button><i class="fa fa-window-maximize" aria-hidden="true"></i></button></a>
            </div>
            <div class="bottom">
                <div class="topic">
                    Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit.
                </div>

                <div class="icon">
                    <a href="" download><i class="fa fa-download" aria-hidden="true"></i></a>
                    <!-- <a href="action_dash.php?remove=<?= $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                </div>
            </div>
        </div>
        <?php endwhile;?>
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














